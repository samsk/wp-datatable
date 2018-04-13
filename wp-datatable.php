<?php
/*
   Plugin Name: WP DataTable
   Plugin URI: https://devel.dob.sk/wp-datatable
   Description: Provide jQuery DataTables for HTML tables
   Version: 0.2.4
   Author: Samuel Behan
   Author URI: https://dob.sk
   Text Domain: datatable
   License: GPLv3
 */

/*
 * Copyright 2016-2018 Samuel Behan
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

if (is_admin()) {
//	include dirname(__FILE__) . '/admin.php';
} else {
	include dirname(__FILE__) . '/init.php';
	include dirname(__FILE__) . '/shortcode.php';
}

?>
