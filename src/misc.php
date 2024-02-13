<?php
/**
 * Misc functions
 *
 * @package Commander
 */

namespace Commander;

function get_button_style() {
	$style = "color: " . get_theme_mod('button_text_color', '#fff') . ';';
	$style .= " background-color: " . get_theme_mod('button_background_color', '#1e73be');
	return $style;
}
?>