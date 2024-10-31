<?php
/*
Plugin Name: Plugins Talk Bar (Free)
Plugin URI: http://dev.pluginstalk.com/pluginstalk-hello-bar
Description: This plugin is discontinued. Meanwhile you can check our <a href='http://dev.pluginstalk.com/post-linker'><strong>Post Linker</strong></a> wordpress plugin which helps you to <strong>generate revenue</strong> by interlinking your posts automatically. Plugins Talk Bar description: Display a top bar in each page of your WordPress blog. You can use it to <strong>display news, important website events, offers or discounts on your products,</strong> etc. The bar is fully <strong>created using CSS</strong>, so that you can personalize according to your needs. Supports <strong>unlimited news</strong> with a read more URL. <strong>Navigation keys</strong> for easy navigating between news. <strong>Automatically scrolls</strong> to next news after every 10 seconds.
Version: 1.0.1
Author: Sunil Kumar
Author URI: http://www.pluginstalk.com
*/

include ( dirname(__FILE__).'/php/includes.php' ); 
register_activation_hook( __FILE__, 'ptbActivated' );
register_deactivation_hook( __FILE__, 'ptbDeactivated' );
addActions();