<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gray
 */

	$linkedin = get_field('linkedin', 'option');
	$facebook = get_field('facebook', 'option');
	$youtube = get_field('youtube', 'option');
	$twitter = get_field('twitter', 'option');

?>

	<footer id="colophon" class="site-footer bg-forest-green px-9">
		<div class="max-w-5xl mx-auto flex items-center justify-between py-12">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.svg" alt="Gray Logo" class="w-[85px]">
			<div class="social-media flex items-center gap-x-1.5">
				<?php if ($linkedin) : ?>
				<a href="<?php echo $linkedin; ?>" target="_blank" class="w-[24px] h-[24px] rounded-full flex items-center justify-center border-white border">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="Linkedin" class="w-[11px]">
				</a>
				<?php endif; 
				if ($youtube) : ?>
				<a href="<?php echo $youtube; ?>" target="_blank" class="w-[24px] h-[24px] rounded-full flex items-center justify-center border-white border">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt="Youtube" class="w-[11px]">
				</a>
				<?php endif;
				if ($facebook) : ?>
				<a href="<?php echo $facebook; ?>" target="_blank" class="w-[24px] h-[24px] rounded-full flex items-center justify-center border-white border">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook" class="w-[6px]">
				</a>
				<?php endif;
				if ($twitter) : ?>
				<a href="<?php echo $twitter; ?>" target="_blank" class="w-[24px] h-[24px] rounded-full flex items-center justify-center border-white border">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter" class="w-[11px]">
				</a>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
