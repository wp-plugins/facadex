<?php
/*
Plugin Name: FacadeX
Plugin URI: http://wordpress.org/extend/plugins/facadex
Version: 1.0.0
Author: plocha
Author URI: http://profiles.wordpress.org/plocha
License: GPLv2
Description: Sends public sites with the XHTML mime type. The internal sites, which have many XHTML errors, are still sent with the HTML mime type.

Copyright 2012  Edgard Schmidt  (email : saiez@web.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class FacadeX {

function __construct () {
	if ( ! is_admin () )
		add_filter ( 'pre_option_html_type', array ( $this, 'set_xhtml_mime' ) );
}

function set_xhtml_mime () {
	return 'application/xhtml+xml';
}

};

new FacadeX;
