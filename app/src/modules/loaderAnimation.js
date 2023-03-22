( function loaderAnimation() {
	const body = document.querySelector( 'body' );
	const loader = document.querySelector( '.preloader' );
	window.addEventListener( 'load', () => {
		loader.classList.add( 'loaded' );
		body.classList.add( 'loaded' );
		setTimeout( () => {
			loader.style.display = 'none';
		}, 1000 );
	} );
}() );
