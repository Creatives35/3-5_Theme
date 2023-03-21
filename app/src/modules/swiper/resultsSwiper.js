import Swiper, { Navigation, HashNavigation, Pagination, breakpoints } from 'swiper';
Swiper.use( [ Navigation, HashNavigation, Pagination, breakpoints ] );

( function() {
	initilizeResults();
	window.addEventListener( 'resize', initilizeResults );
}() );

function initilizeResults() {
	const x = window.matchMedia( '(max-width: 991px)' );
	if ( x.matches ) {
		return new Swiper( '.results-swiper', {
			modules: [ Navigation, HashNavigation ],
			loop: true,
			spaceBetween: 100,
			hashNavigation: {
				watchState: true,
			},
			navigation: {
				nextEl: '.results-swiper-button-next',
			},
			pagination: {
				el: '.results-pagination',
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
