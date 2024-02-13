<?php
/**
 * Header customizer settings and controls
 *
 * @package Commander
 */

add_action('customize_register', function($customize_manager) {
	$customize_manager->add_section(
		'header_settings',
		array(
			'title'    => esc_html__('Header', 'commander'),
			'priority' => 70,
		)
	);

	$customize_manager->add_setting(
		'header_text_color',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
			'default'           => '#111',
		)
	);

	$customize_manager->add_control(
		new \WP_Customize_Color_Control(
			$customize_manager,
			'header_text_color',
			array(
				'label'    => esc_html__('Text', 'commander'),
				'section'  => 'header_settings',
				'settings' => 'header_text_color',
			)
		)
	);

	$customize_manager->add_setting(
		'header_background_color',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
			'default'           => '#eee',
		)
	);

	$customize_manager->add_control(
		new \WP_Customize_Color_Control(
			$customize_manager,
			'header_background_color',
			array(
				'label'    => esc_html__('Background', 'commander'),
				'section'  => 'header_settings',
				'settings' => 'header_background_color',
			)
		)
	);

	$customize_manager->add_setting(
		'sticky_header',
		array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'sticky_header_checkbox',
		array(
			'label'       => esc_html__('Sticky Header', 'commander'),
			'description' => esc_html__('Set the header to sticky, so that it follows as users scroll.', 'commander'),
			'section'     => 'header_settings',
			'settings'    => 'sticky_header',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'header_shadow',
		array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'header_shadow_checkbox',
		array(
			'label'       => esc_html__('Shadow', 'commander'),
			'description' => esc_html__('Add shadow to the header.', 'commander'),
			'section'     => 'header_settings',
			'settings'    => 'header_shadow',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'hide_site_title',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'hide_site_title_checkbox',
		array(
			'label'       => esc_html__('Hide Site Title', 'commander'),
			'description' => esc_html__('Prevent the site title from appearing in the header area.', 'commander'),
			'section'     => 'header_settings',
			'settings'    => 'hide_site_title',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'hide_site_tagline',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'hide_site_tagline_checkbox',
		array(
			'label'       => esc_html__('Hide Tagline', 'commander'),
			'description' => esc_html__('Prevent the site tagline from appearing in the header area.', 'commander'),
			'section'     => 'header_settings',
			'settings'    => 'hide_site_tagline',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'hide_search',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'hide_search_checkbox',
		array(
			'label'       => esc_html__('Hide Search', 'commander'),
			'description' => esc_html__('Hide the search icon from the header.', 'commander'),
			'section'     => 'header_settings',
			'settings'    => 'hide_search',
			'type'        => 'checkbox',
		)
	);
});