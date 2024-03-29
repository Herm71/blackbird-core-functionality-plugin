<?php
/**
 * Plugin Name: Blackbird Custom Functionality
 * Plugin URI: https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * Description: Contains custom functionality. Theme independent.
 * Version: 2.0.0
 * Author: Jason Chafin
 * Author URI: https://github.com/Herm71
 * License: GPL2
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

// Plugin Directory 
define( 'BB_DIR', dirname( __FILE__ ) );

//Include Customization files:

// General.
if (file_exists(BB_DIR . '/lib/functions/general.php') ) {
    include_once BB_DIR . '/lib/functions/general.php';
}

// Disable XMLRP.
if (file_exists(BB_DIR . '/lib/functions/disable-xmlrpc.php') ) {
    include_once BB_DIR . '/lib/functions/disable-xmlrpc.php';
}

// Security Headers.
require_once BB_DIR . '/lib/functions/security-headers.php';
if (file_exists(BB_DIR . '/lib/functions/security-headers.php') ) {
    include_once BB_DIR . '/lib/functions/security-headers.php';
}

// Google Tag Manager.
// if (file_exists(BB_DIR . '/lib/functions/gtm.php') ) {
//     include_once BB_DIR . '/lib/functions/gtm.php';
// }