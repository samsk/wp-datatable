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

function wp_datatable_shortcode($attrs, $content = null) {
	// id=ID
	$id = $attrs ? $attrs['id'] :  0;
	// fat=LEVEL
	$fat = $attrs ? $attrs['fat'] :  0;

	if (!$fat) {
		wp_enqueue_style('wp-datatable-style');
		wp_enqueue_script('wp-datatable-script');
	} else {
		wp_enqueue_style('wp-datatable-style-fat1');
		wp_enqueue_script('wp-datatable-script-fat1');
	}

	if ($content || $id) {
		if (!isset($id))
			return '<b>wp-datatable: required parameter ID is missing</b>';

		$content = 'jQuery(document).ready(function () { jQuery(' . "'#$id'" . ').DataTable({' . $content . '}); });';

		return '<script type="text/javascript">' .
				$content .
			'</script>';
	} else {
		return null;
	}
}

function wp_datatable_shortcode__register() {
	// NOTE: processing happens in wp_datatable_run_shortcode()
	add_shortcode('wp-datatable', 'wp_datatable_shortcode');
}
wp_datatable_shortcode__register();

?>
