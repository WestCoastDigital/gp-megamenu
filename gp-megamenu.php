<?php
/**
 * Plugin Name:       GP Megsmenu
 * Plugin URI:        https://github.com/WestCoastDigital/gp-megamenu
 * Description:       Add mega menu support to GeneratePress.
 * Version:           1.0.0
 * Author:            Jon Mather
 * Author URI:        https://westcoastdigital.com.au/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wcd
 * Domain Path:       /languages
 */

/**
 * Enqueue plugin scripts.
 */
function wcd_gp_megamenu_scripts()
{
    wp_enqueue_style('gp-megamenu', plugins_url('style.css', __FILE__));
    wp_enqueue_script('gp-megamenu', plugins_url('script.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wcd_gp_megamenu_scripts');

