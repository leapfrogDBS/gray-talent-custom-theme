<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gray
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header bg-stone-gray">
		<div class="site-branding px-9 py-8 flex items-center justify-between container mx-auto">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Gray Logo" class="w-32">
			<a href="#apply" class="text-[10px] text-forest-green font-roboto-mono flex items-center justify-between bg-white rounded-3xl px-3.5 py-1 hidden">
				Say Hellooo
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hello.svg" alt="hello" class="w-[22px] ml-1">
			</a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
