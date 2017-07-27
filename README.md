WP DataTable
============
WP DataTable is a [Wordpress](https://wordpress.org) plugin for insertion of static or dynamic [DataTable](https://datatables.net) to any blog post or page, 
that will add advanced interaction controls to any HTML table.
Extension included: Buttons (fat=1), Column visibility, HTML5 export (fat=1), Print view (fat=1), ColReorder, FixedColumns, FixedHeader, Responsive, Select

# Syntax
```
[wp-datatable id="ID" fat="LEVEL"]
  paging: false,
  responsible: true,
  search: true,
//.. and more - see https://datatables.net/reference/option for full reference
[/wp-datatable]
```

- ***id*** - (*optional*) specifies ID of existing table to which datatable functionality should be applied
- ***fat*** - (*optional*) provide fat version of datatables (see Fat level)
- `CONTENT` - optional datatables configuration

# Fat level
1. adds Button extension with HTML5 export and Print preview + JSZip for excel export

# Installation
* Download plugin to *wp-content/plugins* directory
* Activate plugin in admin section
* Use shortcode in pages/posts
