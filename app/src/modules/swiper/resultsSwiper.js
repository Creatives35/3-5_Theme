import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use( [ Navigation, Pagination ] );

( function() {
	initilizeResults();
	window.addEventListener( 'resize', initilizeResults );
}() );

function initilizeResults() {
	const x = window.matchMedia( '(max-width: 991px)' );
	if ( x.matches ) {
		return new Swiper( '.results-swiper', {
			modules: [ Navigation, Pagination ],
			loop: true,
			spaceBetween: 100,
			navigation: {
				nextEl: '.results-swiper-button-next',
			},
			pagination: {
				el: '.results-pagination',
				type: 'progressbar',
			},
		} );
	}
}
