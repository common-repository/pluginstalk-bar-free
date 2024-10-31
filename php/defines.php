<?php
//Set Plugin Name
define('PTB_PLUGIN_NAME','plugins-talk-bar');
//Set Plugin Version
define ( 'PTB_PLUGIN_VERSION', '1.0.1', TRUE );
//Set User Capability
define ( 'PTB_USER_CAPABILITY', 'publish_posts', TRUE );
//Set Base Prefix
global $wpdb;
define ( 'PTB_TABLE_PREFIX', $wpdb->base_prefix, TRUE );
//Set Table Name
define ( 'PTB_TABLE_NAME', PTB_TABLE_PREFIX.'pluginsTalkBarFree', TRUE );
//Set My Number
define ( 'PT_MY_NUMBER', '99.000000000179', TRUE );
//Set My Number
define ( 'PT_API_URL', 'http://api.pluginstalk.com/plugins', TRUE );
//Set Base dir
define( 'PTB_BASE_DIR', realpath(dirname(__FILE__).'/..' ), TRUE);
//Set Base URL
define( 'PTB_BASE_URL',WP_PLUGIN_URL.'/pluginstalk-bar-free', TRUE );