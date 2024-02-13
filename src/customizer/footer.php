<?php
/**
 * Footer customizer settings and controls
 *
 * @package Commander
 */
add_action('customize_register', function($customize_manager) {
	$customize_manager->add_section(
		'footer_settings',
		array(
			'title'    => esc_html__('Footer', 'commander'),
			'priority' => 70,
		)
	);

	$customize_manager->add_setting(
		'footer_border',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'footer_border_checkbox',
		array(
			'label'       => esc_html__('Top border on footer', 'commander'),
			'description' => esc_html__('Show a border on top of the border.', 'commander'),
			'section'     => 'footer_settings',
			'settings'    => 'footer_border',
			'type'        => 'checkbox',
		)
	);

	$customize_manager->add_setting(
		'footer_copyright',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__(get_bloginfo('name') , 'commander'),
		)
	);

	$customize_manager->add_control(
		'footer_copyright_text',
		array(
			'label'       => esc_html__('Copyright text', 'commander'),
			'description' => esc_html__('Text of your copyright text', 'commander'),
			'section'     => 'footer_settings',
			'settings'    => 'footer_copyright',
			'type'        => 'text',
		)
	);

	$customize_manager->add_setting(
		'footer_space',
		array(
			'default'           => 1,
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
		)
	);

	$customize_manager->add_control(
		'footer_space',
		array(
			'default'     => 1,
			'type'        => 'range',
			'label'       => esc_html__('Footer space', 'commander'),
			'section'     => 'footer_settings',
			'input_attrs' => array(
				'min' => '0',
				'max' => '5'
			)
		)
	);
});
