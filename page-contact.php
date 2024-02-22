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

<section class="hero"></section>
<section class="contact-page-container">
    <div class="left-column"></div>
    <section class="contact-form container middle-column">
        <h2 class="contact-form-header text-center">
            Get In Touch With Us
        </h2>
        <div class="contact-form-inner-container">

            <?php echo do_shortcode('[wpforms id="34" title="false"]') ?>
        </div>

    </section>
    <div class="right-column"></div>
</section>

<?php
get_footer();