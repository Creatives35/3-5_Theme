
( function animateScrollIcon() {
	window.addEventListener( 'load', () => {
		const scrollBarIcon = document.querySelector( '.scroll-bar-icon-container' );
		scrollBarIcon.classList.add( 'animate__animated' );
		setTimeout( () => {
			const scrollIcon = document.querySelector( '.scroll-bar-icon-container' );
			const homeBodySection = document.querySelector( 'section.our-story-our-mission' );
			scrollIcon.classList.add( 'hovering' );

			scrollIcon.addEventListener( 'click', () => {
				homeBodySection.scrollIntoView( { behavior: 'smooth' } );
			} );
		}, 2800 );
	} );
}() );

( function navBarAndIconScroll() {
	const scrollIcon = document.querySelector( '.scroll-bar-icon-container' );
	const options = {
		rootMargin: '-150px',
	};
	const heroSection = document.querySelector( 'section.hero' );
	const observer = new IntersectionObserver( ( entries, observer ) => {
		entries.forEach( ( entry ) => {
			if ( ! entry.isIntersecting ) {
				toggleNavbar( false );
				scrollIcon.style.opacity = '0';
				setTimeout( () => {
					scrollIcon.style.display = 'none';
				}, 500 );
			} else {
				toggleNavbar( true );
			}
		} );
	}, options );
	observer.observe( heroSection );
}() );

function toggleNavbar( contains ) {
	const navBar = document.getElementById( 'main-nav' );
	if ( contains ) {
		navBar.classList.remove( 'nav-scrolled' );
	} else {
		navBar.classList.add( 'nav-scrolled' );
	}
}
