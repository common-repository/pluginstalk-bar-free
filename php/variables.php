<?php
class Variables {
	private static $_slug = array( "_main" => "plugins-talk", "_subInfo" => "plugins-talk", "_subPlugin" => "plugins-talk-bar-free" );
	private static $_menu = array( "_main" => "Plugins Talk", "_subInfo" => "About Plugins Talk", "_subPlugin" => "PluginsTalk Bar (Free)" );
	private static $_title = array( "_subInfo" => "Something About Plugins Talk", "_subPlugin" => "Settings Of PluginsTalk Bar (Free)" );
	private static $_function = array( "_subInfo" => "aboutPluginsTalk", "_subPlugin" => "pluginsTalkBarFree" );	
	
	public static function getVariable ( $name, $type ) {
		if ( $type == "__SLUG__" ){
			return Variables::$_slug[$name];
		} else if ( $type == "__MENU__" ) {
			return Variables::$_menu[$name];
		} else if ( $type == "__TITLE__" ) {
			return Variables::$_title[$name];
		} else if ( $type == "__FUNCTION__" ) {
			return Variables::$_function[$name];
		} else {
			return null;
		}
	}
}