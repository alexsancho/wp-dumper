<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             1.0.0
 * @package           Wp_Duper
 *
 * @wordpress-plugin
 * Plugin Name:       Laravel DD for Wordpress
 * Plugin URI:
 * Description:       Use Laravel's dd() (die dump) function in your Wordpress projects
 * Version:           1.0.1
 * Author:            KEC
 * Author URI:        https://kingeclient.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-dumper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

//Autoload Composer packages
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

// If we haven't loaded this plugin from Composer we need to add our own autoloader
if ( ! class_exists('kec\dumper\Dumper')) {
    wp_die('Please execute composer install inside plugin directory');
}

/**
 * Disable Wordpress emoji's as they mess with the var-dumper
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

if ( ! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param mixed
     *
     * @return void
     * @throws ErrorException
     */
    function dd() {
        array_map(
            static function ($x) {
                (new kec\dumper\Dumper)->dump($x);
            },
            func_get_args()
        );

        die(1);
    }
}
