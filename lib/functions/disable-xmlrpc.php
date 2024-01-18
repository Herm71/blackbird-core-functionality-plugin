<?php
/**
 * Disable XMLRPC
 *
 * xmlrpc.php can be used to brute force admin usernames and passwords.
 * see: https://pantheon.io/docs/wordpress-best-practices#avoid-xml-rpc-attacks
 * 
 * @package   Core_Functionality
 * @since     2.0.0
 * @link      https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2024, Jason Chafin
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

add_filter(
    'xmlrpc_methods',
    function () {
        return array();
    },
    PHP_INT_MAX
);

// Remove link from <head>.
remove_action('wp_head', 'rsd_link');