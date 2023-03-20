( function heroNavIconAnimation() {
	const heroNav = document.querySelector( '.hero-nav' );
	const navItems = document.querySelectorAll( '.hero-nav .nav-item-social' );
	heroNav.classList.add( 'animated' );
	navItems.forEach( ( item ) => {
		item.classList.add( 'animated' );
	} );
}() );

