( function caseStudyAnimation() {
	const gritCaseStudySection = document.querySelector( 'section.grit-case-study' );
	const dottedLine = document.querySelector( '.dotted-line-container' );
	const options = {
		threshold: .7,
	};
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				if ( ! gritCaseStudySection.classList.contains( 'animated' ) ) {
					gritCaseStudySection.classList.add( 'animated' );
					dottedLine.classList.add( 'animated' );
				}
			}
		} );
	}, options );

	observer.observe( gritCaseStudySection );
}() );
