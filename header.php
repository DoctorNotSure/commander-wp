<?php
/**
 * @package Commander
 */

?><!doctype html>

<?php
$dark_theme = '';
if (get_theme_mod('dark_mode', false))
	$dark_theme = 'data-bs-theme="dark"';
?>

<html <?php language_attributes(); ?> <?php echo $dark_theme; ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body class="<?php echo esc_attr(implode(' ', get_body_class())); ?>">

	<?php
		if (function_exists('wp_body_open'))
			wp_body_open();
		else
			do_action('wp_body_open');
	?>

	<a class="skip-link screen-reader-text" href="#site-content"><?php 'Skip to content'; ?></a>
	
	<?php get_template_part('template/nav'); ?>
	<?php get_template_part('template/search-modal'); ?>

	<main id="site-content" class="site-content container px-3" role="main">

	