WP DataTable
============
WP DataTable is a [Wordpress](https://wordpress.org) plugin for insertion of static or dynamic [DataTable](https://datatables.net) to any blog post or page..

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
- ***fat*** - (*optional*) provide fat version of datatables
- `CONTENT` - optional datatables configuration

# Fat level
- adds Button plugin with HTML5 export and Print preview

# Installation
* Download plugin to *wp-content/plugins* directory
* Activate plugin in admin section
* Use shortcode in pages/posts
