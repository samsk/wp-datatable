<?php
/*
 * Copyright 2016 Samuel Behan <samuel(.)behan(at)dob(.)sk>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * ( at your option ) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 */

defined('ABSPATH') or exit();

function wp_datatable_enqueue()
{
	define('WP_DATATABLE_VERSION', '1.10.15');

	wp_register_style('wp-datatable-style', plugins_url('css/datatables.min.css?v=' . WP_DATATABLE_VERSION, __FILE__));
	wp_register_script('wp-datatable-script', plugins_url('js/datatables.min.js?v=' . WP_DATATABLE_VERSION, __FILE__));

	wp_register_style('wp-datatable-style-fat1', plugins_url('css/datatables-fat1.min.css?v=' . WP_DATATABLE_VERSION, __FILE__));
	wp_register_script('wp-datatable-script-fat1', plugins_url('js/datatables-fat1.min.js?v=' . WP_DATATABLE_VERSION, __FILE__));
}
add_action('wp_enqueue_scripts', 'wp_datatable_enqueue');

// Actual processing of the shortcode happens here
// This is ugly hack to avoid wpautop() format content of our shortcode
// see https://core.trac.wordpress.org/ticket/6984
// see http://www.viper007bond.com/2009/11/22/wordpress-code-earlier-shortcodes/
function wp_datatable_run_shortcode($content) {
	global $shortcode_tags;

	// Backup current registered shortcodes and clear them all out
	$orig_shortcode_tags = $shortcode_tags;
	remove_all_shortcodes();

	wp_datatable_shortcode__register();

	// Do the shortcode (only the one above is registered)
	$content = do_shortcode($content);

	// Put the original shortcodes back
	$shortcode_tags = $orig_shortcode_tags;

	return $content;
}
add_filter('the_content', 'wp_datatable_run_shortcode', 7);

?>
