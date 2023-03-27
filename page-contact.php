<?php
/**
 * The template for displaying the contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Creatives_35
 */

get_header();
?>

<section class="hero contact-hero ">
        <section class="pop-up">
          <div class="side-menu-overlay"></div>
          <div class="side-menu-pop-up">
            <div class="side-menu-text-container">
              <a href="<?php echo site_url( 'wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">
                Case Studies Step Into 3:5 Capablilities
              </a>
            </div>
            <div class="side-menu-image-container">
            <a href="<?php echo site_url( 'wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">
                <img src=<?php echo get_theme_file_uri('/app/src/images/case-studies.png') ?> alt="3:5 Capablilities">
              </a>
            </div>
          </div>
        </section>
        </div>
        <div class="container-fluid">
            <ul class="nav hero-nav flex-column">
                <li class="nav-item nav-item-social">
                  <a target="_blank" class="nav-link" href="https://www.instagram.com/35creatives/">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/instagram.svg') ?> alt="Instagram Icon" class="filter-white">
                  </a>
                </li>
                <li class="nav-item nav-item-social">
                  <a target="_blank" class="nav-link" href="https://www.linkedin.com/company/35creatives/">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/linkedin.svg') ?> alt="LinkedIn Icon" class="filter-white">
                  </a>
                </li>
                <li class="nav-item nav-item-social">
                  <a target="_blank" class="nav-link" href="https://www.facebook.com/35creatives">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/facebook.svg') ?> alt="Facebook Icon" class="filter-white">
                  </a>
                </li>
                <li id="side-nav-menu-icon" class="nav-item">
                  <a class="nav-link" href="#">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/menu-icon.png') ?> alt="Menu Icon" class="filter-white">
                  </a>
                </li>
              </ul>
            <div class="row align-items-center justify-content-center">
                <div class="container contact-hero-content-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-12 col-xl-12 contact-hero-text">
                            <h1><b>Top Digital Marketing Agency</b> Delivering Value & Results to 100% of Our Clients</h1>
                            <br>
                            <a href="https://calendly.com/3-5creativesllc/one-on-one-with-curtis" class="btn btn-lg btn-primary rounded-pill">
                                Start Your Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="contact-form container">

</section>

<?php
get_footer();
