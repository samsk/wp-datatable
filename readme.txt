=== WP DataTable ===
Tags: jquery, datatables
Requires at least: 4.0
Tested up to: 4.7
Stable tag: 0.2.1
Contributors: SamSK
Donate link: https://devel.dob.sk/wp-datatable
License: GPLv3 or later

WP DataTable provides simple possibility to include raw DataTables in any blog post or page.

== Description ==

WP DataTable is a Wordpress plugin for insertion of static or dynamic DataTable functionality (http://datatables.net/) to any blog post or page.

= Features  =

* Provision of DataTables script and css style
* Full configuration via raw javascript (see https://datatables.net/reference/option/ for more info)

= Usage =

`
[wp-datatable id="ID"]
    paging: false,
    responsible: true,
    search: true,
    //.. and more - see https://datatables.net/reference/option for full reference
[/wp-datatable]
`

* *id* - specifies ID of existing table to which datatable functionality should be applied
* `CONTENT` - optional datatables configuration

== Installation ==

1. Make sure you are using WordPress 4.0 or later and that your server is running PHP 5.2.4 or later (same requirement as WordPress itself)
1. Install and activate the plugin as usual from the 'Plugins' menu in WordPress.

== Changelog ==

= 0.2.1 (2016-10-29) =

* Fix warning
* Include more datatables extensions

= 0.2.0 (2016-09-04) =

* Initial release
