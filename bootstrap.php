<?php
/**
 * @wordpress-plugin
 * Plugin Name:       My Project Plugin
 * Plugin URI:        https://github.com/wellmann/wp-plugin-template
 * Description:       My Project Plugin template.
 * Version:           0.1.0
 * Author:            Kevin Wellmann
 * Author URI:        https://kevin.wellmann.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       myproject-plugin
 * Domain Path:       /lang
 * GitHub Plugin URI: https://github.com/wellmann/wp-plugin-template
 */

namespace My_Project\Plugin;

// Do not access file directly.
if (!defined('ABSPATH')) {
    header('HTTP/1.1 403 Forbidden');
    exit;
}

define(__NAMESPACE__.'\\MAIN_FILE', __FILE__);
define(__NAMESPACE__.'\\BASENAME', plugin_basename(MAIN_FILE));
define(__NAMESPACE__.'\\DIR_PATH', plugin_dir_path(MAIN_FILE));
define(__NAMESPACE__.'\\DIR_URL', plugin_dir_url(MAIN_FILE));
define(__NAMESPACE__.'\\PREFIX', 'myproject_plugin_');

// If plugin is used as isolated package.
if (file_exists(DIR_PATH.'vendor/autoload.php')) {
    require DIR_PATH.'vendor/autoload.php';
}