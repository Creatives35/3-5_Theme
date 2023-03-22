import Swiper, { Navigation, Pagination, HashNavigation } from 'swiper';
Swiper.use( [ Navigation, Pagination, HashNavigation ] );

( function() {
	initilizeServices();
	window.addEventListener( 'resize', initilizeServices );
}() );

function initilizeServices() {
	const x = window.matchMedia( '(max-width: 991px)' );
	if ( x.matches ) {
		return new Swiper( '.services-swiper', {
			modules: [ Navigation, Pagination ],
			loop: true,
			spaceBetween: 30,
			navigation: {
				nextEl: '.services-swiper-button-next',
			},
			pagination: {
				el: '.services-pagination',
				type: 'progressbar',
			},
		} );
	}
}
