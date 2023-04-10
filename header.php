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
<div class="preloader">
  <div class="loader">
    <img src="<?php echo get_theme_file_uri('/app/src/icons/gear.png')?>" alt="gear icon" class="gear-icon filter-white" id="gear-one">
    <img src="<?php echo get_theme_file_uri('/app/src/icons/gear.png')?>" alt="gear icon" class="gear-icon filter-white" id="gear-two">
  </div>
</div>
<section class="body-background"></section>
<section class="second-body-background hidden"></section>
<header>  
      <nav id="main-nav" class="navbar navbar-dark bg-body-tertiary fixed-top">
          <div class="container-fluid header-controls-container">
            <div class="header-logo">
              <a href="<?php echo site_url() ?>" class='header-logo-link'>
              <img class='the_header_logo filter-white' src=<?php echo get_theme_file_uri('/app/src/logos/3-5-logos/35-creatives-logo.png') ?> alt="3:5 Creative[s] Logo">
              </a>
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
                      <a target="_blank" href="<?php echo site_url( '/wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">Work</a>
                    </li>
                    <li 
                      class="fas fa-mail-bulk ">
                      <a target="_blank" href="<?php echo site_url( '/wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">Services</a>
                    </li>
                    <li
                      class="fas fa-user-check ">
                      <a href="<?php echo site_url( '/contact') ?>">Contact</a>
                    </li>
                  </ul>
                  <div class="social-media-holder">
                    <div class="header-social-icon header-social-icon-0 ladder">
                      <a target="_blank" href="https://www.facebook.com/35creatives">
                      <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/facebook.svg') ?> alt="Facebook Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-1 ladder">
                      <a target="_blank" href="https://www.linkedin.com/company/35creatives/">
                      <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/linkedin.svg') ?> alt="LinkedIn Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-2 ladder">
                      <a target="_blank" href="https://www.instagram.com/35creatives/">
                      <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/instagram.svg') ?> alt="Instagram Icon" class="filter-white">
                    </a>
                    </div>
                    <div class="header-social-icon header-social-icon-3 ladder">
                      <a target="_blank" href="https://www.youtube.com/channel/UClPSAgxW4Lb3VTMRxE9V9nw">
                      </a>
                      <img src="<?php echo get_theme_file_uri('/app/src/icons/social-media/youtube.png') ?>" alt="Youtube Icon">
                    </div>
                  </div>	
              </div>
            </div>
          </div>
        </nav>
      </header>
