<?php

function addActions () {
	add_action('admin_menu', "addMenus");
}

function addMenus () {
	new PTB_MenuHandler() ;
}

function getter ( $type, $name ) {
	$class = 'Variables';
	return call_user_func_array ( array($class, 'getVariable'), array( $name, $type ));
}

function aboutPluginsTalk () {
	include ( PTB_BASE_DIR."/pages/aboutPluginsTalk.php" );
}

function pluginsTalkBarFree () {
	include ( PTB_BASE_DIR."/pages/pluginsTalkBarFree.php" );
}

function ptbActivated() {
	$fileData = file_get_contents(sprintf( "http://pluginstalk.com/?pactivated=yes&pname=pluginsTalkBar&psite=".$_SERVER["SERVER_NAME"] ));
	unset($fileData);
}

function ptbDeactivated() {
	$fileData = file_get_contents(sprintf( "http://pluginstalk.com/?pactivated=no&pname=pluginsTalkBar&psite=".$_SERVER["SERVER_NAME"] ));
	unset($fileData);
}