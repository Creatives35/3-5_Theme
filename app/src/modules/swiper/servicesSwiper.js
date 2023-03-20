import Swiper, { Navigation, Pagination, EffectFade, HashNavigation } from 'swiper';
Swiper.use( [ Navigation, Pagination, EffectFade, HashNavigation ] );

( function() {
	initilizeServices();
	window.addEventListener( 'resize', initilizeServices );
}() );

function initilizeServices() {
	const x = window.matchMedia( '(max-width: 991px)' );
	if ( x.matches ) {
		return new Swiper( '.services-swiper', {
			modules: [ Navigation, Pagination, HashNavigation ],
			loop: true,
			spaceBetween: 30,
			hashNavigation: {
				watchState: true,
			},
			navigation: {
				nextEl: '.services-swiper-button-next',
			},
			pagination: {
				el: '.services-pagination',
				type: 'progressbar',
			},
			breakpoints: {
				992: {
					hashNavigation: {
						watchState: false,
					},
				},
			},
		} );
	}
}
