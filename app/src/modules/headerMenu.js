import $ from 'jquery';
( function() {
//Menu Class Toggler
	let menuOpen = false;
	$( '#menu-trigger' ).on( 'click', function() {
		if ( ! menuOpen ) {
			openMenu();
		} else {
			closeMenu();
		}
	} );
	function openMenu() {
		const trigger = document.getElementById( 'menu-trigger' ),
			menu = document.getElementById( 'main-menu' );
		trigger.classList.add( 'opened' );
		menu.classList.add( 'opened-menu' );
		$( '.menu-logo' ).addClass( 'white-logo' );
		$( '#menu-primary-menu li' ).addClass( 'ladder' );
		$( '.social-media-holder .header-social-icon' ).addClass( 'ladder' );
		menuOpen = true;
	}
	function closeMenu() {
		const trigger = document.getElementById( 'menu-trigger' ),
			menu = document.getElementById( 'main-menu' );

		//menu.classList.toggle('invisible-opacity');
		trigger.classList.remove( 'opened' );
		menu.classList.remove( 'opened-menu' );
		$( '.menu-logo' ).removeClass( 'white-logo' );
		$( '#menu-primary-menu li' ).removeClass( 'ladder' );
		$( '.social-media-holder .header-social-icon' ).removeClass( 'ladder' );
		menuOpen = false;
	}
}() );
