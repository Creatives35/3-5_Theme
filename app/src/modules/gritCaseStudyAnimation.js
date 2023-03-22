( function caseStudyAnimation() {
	const gritCaseStudySection = document.querySelector( 'section.grit-case-study' );
	const phoneCaseStudy = document.querySelector( 'section.grit-case-study .right-side' );
	const options = {
		threshold: 1,
	};
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				if ( ! gritCaseStudySection.classList.contains( 'animated' ) ) {
					gritCaseStudySection.classList.add( 'animated' );
					phoneCaseStudy.classList.add( 'animate__rotateIn' );
				}
			}
		} );
	}, options );

	observer.observe( gritCaseStudySection );
}() );
