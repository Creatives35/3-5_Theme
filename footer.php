<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creatives_35
 */

?>

<footer>
        <div class="footer-container">
          <div class="container-fluid main-footer ">
            <div class="container inner-container">
              <div class="row text-container">
              <div class="col col-5 col-sm-5 col-md-6 col-lg-4 col-xl-2 logo-container">
                <img class="logo filter-white" src="<?php echo get_theme_file_uri('/app/src/logos/3-5-logos/35symbol_logo.png') ?>" alt="3:5 Creative[s] Logo" class="35-logo filter-white">
              </div>
              <div class="col col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 page-links">
                <ul>
                  <li><a href="<?php echo site_url()?>" >Home</a></li>
                  <li><a href="<?php echo site_url( 'wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">Work</a></li>
                  <li><a href="<?php echo site_url( 'wp-content/uploads/2023/03/Capabilites_Deck.pdf') ?>">Services</a></li>
                  <!-- <li><a href="#">Our Stories</a></li>
                  <li><a href="#">Contact</a></li> -->
                </ul>
              </div>
              <div class="col col-7 col-sm-7 col-md-6 col-lg-3 col-xl-2 contact-info">
                <ul class="contact-list">
                  <li><a href="https://goo.gl/maps/cjXUx89zyfu3feHF8">
                    <div class="left-side">
                      <img width="15px" src="<?php echo get_theme_file_uri('/app/src/icons/location-pin.png') ?>" alt="location icon">
                    </div>
                    <div class="right-side">
                      ​​15 Canal Pl #301
                      <br>
                      Bronx, NY 10451
                    </div>
                  </a></li>
                  <li><a href="tel:6788982485">
                    <div class="left-side">
                      <img width="15px" src="<?php echo get_theme_file_uri('/app/src/icons/phone-icon.png') ?>" alt="phone icon">
                    </div>
                    <div class="right-side">
                      (678) 898-2485
                    </div>
                  </a></li>
                  <li><a href="mailto:marketing@35creatives.com">
                    <div class="left-side">
                      <img width="15px" src="<?php echo get_theme_file_uri('/app/src/icons/mail.png') ?>" alt="mail icon">
                    </div>
                    <div class="right-side">
                      marketing@35creatives.com
                    </div>
                  </a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-6 col-md-6 social-media-mobile-container">
              <ul class="social-media-mobile-list">
                  <li><a target="_blank" href="https://www.instagram.com/35creatives/">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/instagram.svg') ?> alt="Instagram Icon" class="filter-white">
                  </a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/company/35creatives/">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/linkedin.svg') ?> alt="LinkedIn Icon" class="filter-white">
                  </a></li>
                  <li><a target="_blank" href="https://www.facebook.com/35creatives">
                  <img src=<?php echo get_theme_file_uri('/app/src/icons/social-media/facebook.svg') ?> alt="Facebook Icon" class="filter-white">
                  </a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-lg-12 footer-logos-container">
                  <div class="logos">
                    <img src="<?php echo get_theme_file_uri('/app/src/logos/company-logos/google_reviews.png') ?>" alt="Google Reviews Logo">
                    <img src="<?php echo get_theme_file_uri('/app/src/logos/company-logos/bni.png') ?>" alt="BNI Logo">
                    <img src="<?php echo get_theme_file_uri('/app/src/logos/company-logos/goldman_sachs.jpeg') ?>"alt="Goldman Sachs Logo">
                  </div>
              </div>
            </div>
            <div class="row footer-tagline">
              <p>
                © 2023 Web Design & Development 3:5 Creative[s]. <span>Engage on Social Media and Brand Beautifully.</span> 
			        </p>
            </div>
            </div>
          </div>
        </div>
      </footer>

<?php wp_footer(); ?>

</body>
</html>
