<?php
/**
 * 404 page customizer settings and controls
 *
 * @package Commander
 */
add_action('customize_register', function($customize_manager) {
	$customize_manager->add_section(
		'404_settings',
		array(
			'title'    => esc_html__('Not Found 404', 'commander'),
			'priority' => 130,
		)
	);

	$customize_manager->add_setting(
		'404_header',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__('404', 'commander'),
		)
	);

	$customize_manager->add_control(
		'404_header_text',
		array(
			'label'       => esc_html__('Header', 'commander'),
			'section'     => '404_settings',
			'settings'    => '404_header',
			'type'        => 'text',
		)
	);

	$customize_manager->add_setting(
		'404_sub_title',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__('Page not found.', 'commander'),
		)
	);

	$customize_manager->add_control(
		'404_sub_title_text',
		array(
			'label'       => esc_html__('Subtitle', 'commander'),
			'section'     => '404_settings',
			'settings'    => '404_sub_title',
			'type'        => 'text',
		)
	);

	$customize_manager->add_setting(
		'404_message',
		array(
			'transport'         => 'refresh',
			'default'           => esc_html__('The page you\'re looking for doesn\'t exist.', 'commander'),
		)
	);

	$customize_manager->add_control(
		'404_message_textarea',
		array(
			'label'       => esc_html__('Message', 'commander'),
			'section'     => '404_settings',
			'settings'    => '404_message',
			'type'        => 'textarea',
		)
	);
});
