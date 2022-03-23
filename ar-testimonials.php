<?php /** @noinspection PhpIncludeInspection */

/**
 * Plugin Name: AR Testimonials
 * Plugin URI: https://www.wordpress.org/ar-testimonials
 * Description: Description
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Anton Rotshtein
 * Author URI: https://examle.net
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ar-testimonials
 * Domain Path: /languages
 */

/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('AR_Testimonials')) {
    class AR_Testimonials
    {
        function __construct() {
            $this->define_constants();
        }

        public function define_constants() {
            define('AR_TESTIMONIALS_PATH', plugin_dir_path(__FILE__));
            define('AR_TESTIMONIALS_URL', plugin_dir_url(__FILE__));
            define('AR_TESTIMONIALS_VERSION', '1.0.0');
        }

        public static function activate() {

        }

        public static function deactivate() {

        }

        public static function uninstall() {

        }

    }
}

if (class_exists('AR_Testimonials')) {
    register_activation_hook(__FILE__, array('AR_Testimonials', 'activate'));
    register_deactivation_hook(__FILE__, array('AR_Testimonials', 'deactivate'));
    register_uninstall_hook(__FILE__, array('AR_Testimonials', 'uninstall'));

    new AR_Testimonials();
}
