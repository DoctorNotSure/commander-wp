<?php
/**
 * @package Commander
 */

define('COMMANDER_VERSION', '1.0.0');
define('COMMANDER_PLUGIN_DIR', get_template_directory(__FILE__));
define('COMMANDER_PLUGIN_URL', get_template_directory_uri(__FILE__));

// setting up the theme - hooks and filters
require_once get_parent_theme_file_path('src/setup.php');
require_once get_parent_theme_file_path('src/enqueue.php');
require_once get_parent_theme_file_path('src/misc.php');

// Including the customizer components
require_once get_parent_theme_file_path('src/customizer/header.php');
require_once get_parent_theme_file_path('src/customizer/footer.php');
require_once get_parent_theme_file_path('src/customizer/global.php');
require_once get_parent_theme_file_path('src/customizer/logo.php');
require_once get_parent_theme_file_path('src/customizer/404.php');

// menu functionality
require_once get_parent_theme_file_path('src/menu.php');