=== WP DataTable ===
Tags: jquery, datatables
Requires at least: 4.0
Tested up to: 6.7
Stable tag: 0.3.0
Contributors: SamSK
Donate link: https://devel.dob.sk/wp-datatable
License: GPLv3 or later

WP DataTable provides simple possibility to include raw javascript DataTables in any blog post or page, that will add advanced interaction controls to any HTML table.

== Description ==

WP DataTable is a Wordpress plugin for insertion of static or dynamic DataTable functionality (http://datatables.net/) to any blog post or page.
Extensions included: Buttons (fat=1), Column visibility, HTML5 export (fat=1), Print view (fat=1), ColReorder, FixedColumns, FixedHeader, Responsive, Select

= Features  =

* Provision of DataTables script and css style
* Full configuration via raw javascript (see https://datatables.net/reference/option/ for more info)

= Usage =

`
[wp-datatable id="ID" fat="LEVEL"]
    paging: false,
    responsive: true,
    search: true,
    //.. and more - see https://datatables.net/reference/option for full reference
[/wp-datatable]
`

* *id* - specifies ID of existing table to which datatable functionality should be applied
* *fat* - (*optional*) provide fat version of datatables (see Fat level)
* `CONTENT` - optional datatables configuration

= Fat level =

1. adds Button extension with HTML5 export and Print preview + JSZip for excel export

== Installation ==

1. Make sure you are using WordPress 4.0 or later and that your server is running PHP 5.2.4 or later (same requirement as WordPress itself)
1. Install and activate the plugin as usual from the 'Plugins' menu in WordPress.

== Changelog ==

= 0.3.0 (2025-01-31) =

* Fix Contributor XSS via id attribute (reported by zaim via Wordfence)
* Update jQuery DataTables to 2.2.1

= 0.2.6 (2022-11-02) =

* Update jQuery DataTables to 1.11.1

= 0.2.5 (2018-04-13) =

* fix copyright info

= 0.2.4 (2017-11-07) =

* Update jQuery DataTables to 1.10.16
* Fixed sort icon paths

= 0.2.3 (2017-07-23) =

* Update jQuery DataTables to 1.10.15
* Added Datatables with Button plugin, served if attribute fat=1

= 0.2.2 (2017-01-18) =

* Fix sort images paths
* Update jQuery DataTables to 1.10.13

= 0.2.1 (2016-10-29) =

* Fix warning
* Include more datatables extensions

= 0.2.0 (2016-09-04) =

* Initial release
