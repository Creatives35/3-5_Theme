( function bodyBackgroundAnimation() {
	const x = window.matchMedia( '(min-width: 992px)' );
	if ( x.matches ) {
		const firstBackground = document.querySelector( '.body-background' );
		const secondBackground = document.querySelector( '.second-body-background' );
		const breakpoints = document.querySelectorAll( '.body-background-breakpoint' );
		const options = {
			threshold: 1,
		};
		const observer = new IntersectionObserver( ( entries, observer ) => {
			entries.forEach( ( entry ) => {
				if ( entry.isIntersecting ) {
					firstBackground.classList.toggle( 'hidden' );
					secondBackground.classList.toggle( 'hidden' );
				}
			} );
		}, options );

		breakpoints.forEach( ( breakpoint ) => {
			observer.observe( breakpoint );
		} );
	}
}() );
