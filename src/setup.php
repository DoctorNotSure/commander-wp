<?php
/**
 * Theme setup
 *
 * @package Commander
 */

add_action('after_setup_theme', function() {
	register_nav_menus(
		array(
			'primary'  => 'Primary',
			'header_socials' => 'Header Socials',
			'footer-socials' => 'Footer Socials'
		)
	);

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
	add_theme_support('custom-spacing');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_theme_support('experimental-link-color');
	add_theme_support('automatic-feed-links');

	load_theme_textdomain('commander', get_template_directory() . '/languages');
});

add_action( 'admin_init', function () {
	add_editor_style("dist/lib/bootstrap-5.3/css/bootstrap.min.css");
	add_editor_style("dist/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css");
});