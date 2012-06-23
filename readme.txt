=== FacadeX ===
Contributors: plocha
Tags: mime, content, type, xhtml, html, admin, error, syntax, xml, application
Requires at least: 3.3.2
Tested up to: 3.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sends public sites with the XHTML mime type. The internal sites, which have many XHTML errors, are still sent with the HTML mime type.

== Description ==

If FacadeX is active, the public WordPress sites are sent with the xhtml mime type. The internal sites like the administration panel and the login screen, which have many xhtml syntax errors, are still sent with the standard mime type.

**You must ensure that your public sites have valid XHTML, otherwise you will get parsing errors in your browser.**

== Installation ==

1. Upload `facadex.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0.0 =
* sends public sites with the XHTML mime type

== Upgrade Notice ==

= 1.0.0 =
This is the first version
