const interval = 100;
function percentageAnimation( element ) {
	let startValue = 0;
	const endValue = parseInt( element.getAttribute( 'data-val' ) );
	const duration = Math.floor( interval / endValue );
	const counter = setInterval( () => {
		startValue += 1;
		element.textContent = startValue + '%';
		if ( startValue === endValue ) {
			clearInterval( counter );
		}
	}, duration );
}

( function bootAnimations() {
	const firstPercentage = document.getElementById( 'percentage-1' );
	const secondPercentage = document.getElementById( 'percentage-2' );
	const thirdPercentage = document.getElementById( 'percentage-3' );
	const desktopResultsSection = document.querySelector( '.desktop-results' );
	const options = {
		threshold: 1,
	};
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				if ( ! desktopResultsSection.classList.contains( 'animated' ) ) {
					desktopResultsSection.classList.add( 'animated' );
					percentageAnimation( firstPercentage );
					percentageAnimation( secondPercentage );
					percentageAnimation( thirdPercentage );
				}
			}
		} );
	}, options );

	observer.observe( desktopResultsSection );
}() );
