( function footerAnimation() {
	const footer = document.querySelector( 'footer' );
	const footerTextContainer = document.querySelector( 'footer .text-container' );
	const options = {
		threshold: .2,
	};
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				if ( ! footerTextContainer.classList.contains( 'animated' ) ) {
					footerTextContainer.classList.add( 'animated' );
				}
			}
		} );
	}, options );

	observer.observe( footer );
}() );
