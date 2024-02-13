<?php
/**
 * Global customizer settings and controls
 *
 * @package Commander
 */

add_action('customize_register', function($customize_manager) {
	$customize_manager->add_section(
		'site_settings',
		array(
			'title'    => esc_html__('Site Settings', 'commander'),
			'priority' => 100,
		)
	);

	$customize_manager->add_setting(
		'page_titles',
		array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'show_page_title_checkbox',
		array(
			'label'       => esc_html__('Page Titles', 'commander'),
			'description' => esc_html__('Display page titles on individual pages that are not individually opted-out.', 'commander'),
			'section'     => 'site_settings',
			'settings'    => 'page_titles',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'dark_mode',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'dark_mode_checkbox',
		array(
			'label'       => esc_html__('Dark Mode', 'commander'),
			'description' => esc_html__('Set the style of the header to dark mode.', 'commander'),
			'section'     => 'site_settings',
			'settings'    => 'dark_mode',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'button_text_color',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
			'default'           => '#fff',
		)
	);

	$customize_manager->add_control(
		new \WP_Customize_Color_Control(
			$customize_manager,
			'button_text_color',
			array(
				'label'    => esc_html__('Button Text Color', 'commander'),
				'section'  => 'site_settings',
				'settings' => 'button_text_color',
			)
		)
	);

	$customize_manager->add_setting(
		'button_background_color',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
			'default'           => '#1e73be',
		)
	);

	$customize_manager->add_control(
		new \WP_Customize_Color_Control(
			$customize_manager,
			'button_background_color',
			array(
				'label'    => esc_html__('Button Background Color', 'commander'),
				'section'  => 'site_settings',
				'settings' => 'button_background_color',
			)
		)
	);

	$customize_manager->add_setting(
		'search_text',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__('Search', 'commander'),
		)
	);

	$customize_manager->add_control(
		'search_text_text',
		array(
			'label'       => esc_html__('Search', 'commander'),
			'description' => esc_html__('The placeholder text for the search form', 'commander'),
			'section'     => 'site_settings',
			'settings'    => 'search_text',
			'type'        => 'text',
		)
	);

	$customize_manager->add_setting(
		'read_more_text',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__('Read', 'commander'),
		)
	);

	$customize_manager->add_control(
		'read_more_text_text',
		array(
			'label'       => esc_html__('Read more text', 'commander'),
			'description' => esc_html__('Text of the button show to read the post', 'commander'),
			'section'     => 'site_settings',
			'settings'    => 'read_more_text',
			'type'        => 'text',
		)
	);
});