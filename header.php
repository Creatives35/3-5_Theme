<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creatives_35
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<section class="body-background"></section>
<section class="second-body-background hidden"></section>
<header>  
      <nav id="main-nav" class="navbar navbar-dark bg-body-tertiary fixed-top">
          <div class="container-fluid header-controls-container">
            <div class="header-logo">
              <a href="<?php echo site_url() ?>" class='header-logo-link'></a>
              <img class='the_header_logo filter-white' src=<?php echo get_theme_file_uri('/app/build/c75012287636ca5350a0.png') ?> alt="3:5 Creative[s] Logo">
            </div>
            <div class="menu-control">
              <div id="menu-trigger">
                <span class="sm-line line"></span>
                <span class="md-line line"></span>
                <span class="sm-line line"></span>
              </div>
              
            </div>
          </div>
          <div class="header-menu-container">
            <div id="main-menu" class="main-menu">
              <div class=" menu-container">
                  <ul id="menu-primary-menu" class="menu-list">
                    <li
                      class="fas fa-home ">
                      <a href="<?php echo site_url()?>">Home</a>
                    </li>
                    <li 
                      class="fas fa-laptop-house ">
                      <a href="#">Work</a>
                    </li>
                    <li 
                      class="fas fa-mail-bulk ">
                      <a href="#">Services</a>
                    </li>
                    <!-- <li
                      class="fas fa-user-check ">
                      <a href="#">Referral</a>
                    </li> -->
                  </ul>
                  <div class="social-media-holder">
                    <div class="header-social-icon header-social-icon-0 ladder">
                      <a target="_blank" href="https://www.facebook.com/35creatives">
                      <img src=<?php echo get_theme_file_uri('/app/build/abf497610b49db7baa31.svg') ?> alt="Facebook Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-1 ladder">
                      <a target="_blank" href="https://www.linkedin.com/company/35creatives/">
                      <img src=<?php echo get_theme_file_uri('/app/build/ad8e6ea2f67a663186c9.svg') ?> alt="LinkedIn Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-2 ladder">
                      <a target="_blank" href="https://www.instagram.com/35creatives/">
                      <img src=<?php echo get_theme_file_uri('/app/build/9357d33cfa9784ac7693.svg') ?> alt="Instagram Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-3 ladder">
                      <a target="_blank" href="https://www.youtube.com/channel/UClPSAgxW4Lb3VTMRxE9V9nw">
                      </a>
                      <img src="<?php echo get_theme_file_uri('/app/src/icons/youtube.png') ?>" alt="Youtube Icon">
                    </div>
                  </div>	
              </div>
            </div>
          </div>
        </nav>
      </header>
