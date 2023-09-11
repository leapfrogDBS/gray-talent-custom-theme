<?php
/**
 * The template for displaying the landing page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gray
 */

get_header();
?>

	<main id="primary" class="site-main">
	       
        <?php
            include(locate_template('template-parts/intro.php'));
            include(locate_template('template-parts/circles.php'));
            include(locate_template('template-parts/founder.php'));
            include(locate_template('template-parts/apply.php'));
        ?>

	</main><!-- #main -->

<?php
get_footer();
