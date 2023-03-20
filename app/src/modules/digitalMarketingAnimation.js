( function digitalMarketingAnimations() {
	const digitalMarketingSection = document.querySelector( 'section.digital-marketing' );
	const icons = document.querySelectorAll( 'section.digital-marketing .marketing-icon' );
	const options = {
		threshold: .5,
	};
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				if ( ! digitalMarketingSection.classList.contains( 'animated' ) ) {
					digitalMarketingSection.classList.add( 'animated' );
					icons.forEach( ( icon ) => {
						icon.classList.add( 'animated' );
					} );
				}
			}
		} );
	}, options );

	observer.observe( digitalMarketingSection );
}() );
