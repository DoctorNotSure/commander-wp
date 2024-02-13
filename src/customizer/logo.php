<?php
/**
 * Logo customizer settings and controls
 *
 * @package Commander
 */
add_action('customize_register', function($customize_manager) {
	$customize_manager->add_setting(
		'logo_width',
		array(
			'default'           => 30,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'logo_width',
		array(
			'type'        => 'range',
			'label'       => esc_html__('Width', 'commander'),
			'section'     => 'title_tagline',
			'priority'    => 8,
		)
	);

	$customize_manager->add_setting(
		'site_title_space',
		array(
			'default'           => 3,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'site_title_space',
		array(
			'type'        => 'range',
			'label'       => esc_html__('Title Space', 'commander'),
			'section'     => 'title_tagline',
			'priority'    => 9,
			'input_attrs' => array(
				'min' => '1',
				'max' => '5'
			)
		)
	);

	$customize_manager->add_setting(
		'logo_add_shadow',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'logo_add_shadow_checkbox',
		array(
			'label'       => esc_html__('Add shadow to logo', 'commander'),
			'description' => esc_html__('This will add a shadow to your logo.', 'commander'),
			'section'     => 'title_tagline',
			'settings'    => 'logo_add_shadow',
			'priority'    => 9,
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'logo_rounded',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'logo_rounded_checkbox',
		array(
			'label'       => esc_html__('Make logo rounded', 'commander'),
			'description' => esc_html__('This will make your logo rounded.', 'commander'),
			'section'     => 'title_tagline',
			'settings'    => 'logo_rounded',
			'priority'    => 9,
			'type'        => 'checkbox',
		)
	);
});