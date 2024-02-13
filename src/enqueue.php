<?php
/**
 * @package Commander
 */

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script(
		'commander-bootstrap-js',
		get_theme_file_uri("dist/lib/bootstrap-5.3/js/bootstrap.bundle.min.js"),
		array(),
		COMMANDER_VERSION,
		true
	);

	wp_enqueue_script(
		'commander-jquery',
		get_theme_file_uri("dist/lib/jquery-3.7.1.min.js"),
		array(),
		COMMANDER_VERSION,
		true
	);

	wp_enqueue_script(
		'commander-masonry',
		get_theme_file_uri("dist/lib/masonry-4.2.2.min.js"),
		array(),
		COMMANDER_VERSION,
		true
	);

	wp_enqueue_script(
		'commander-frontend',
		get_theme_file_uri("dist/js/frontend.js"),
		array(),
		COMMANDER_VERSION,
		true
	);
});

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style(
		'commander-bootstrap-style',
		get_theme_file_uri("dist/lib/bootstrap-5.3/css/bootstrap.min.css"),
		array(),
		COMMANDER_VERSION
	);

	wp_enqueue_style(
		'commander-bootstrap-icons',
		get_theme_file_uri("dist/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css"),
		array(),
		COMMANDER_VERSION
	);
});