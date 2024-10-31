<?php
class PTB_MenuHandler {
	private function _checkMenu($handle, $sub = false) {
		if(!is_admin() || (defined('DOING_AJAX') && DOING_AJAX)) {
			return false;
		}
		global $menu, $submenu;
		$check_menu = $sub ? $submenu : $menu;
		if(empty($check_menu)) {
			return false;
		}
		foreach ($check_menu as $k => $item) {
			if ($sub) {
				foreach($item as $sm) {
				  if($handle == $sm[2]) {
				    return true;
				  }
				}
			} else {
				if($handle == $item[2]) {
				  return true;
				}
			}
		}
		return false;
	}
	
	function __construct() {
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_main" ) ) ) {
			add_menu_page("Top Heading Menu", getter ( "__MENU__" , "_main" ), USER_CAPABILITY, getter ( "__SLUG__" , "_main" ), getter ( "__FUNCTION__" , "_subInfo" ), PT_API_URL."/logo_16.png" , PT_MY_NUMBER);
		}
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_subInfo" ) , true ) ) {
			add_submenu_page( getter ( "__SLUG__" , "_main" ), getter ( "__TITLE__" , "_subInfo" ), getter ( "__MENU__" , "_subInfo" ), USER_CAPABILITY, getter ( "__SLUG__" , "_subInfo" ), getter ( "__FUNCTION__" , "_subInfo" ) );
		}
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_subPlugin" ) , true ) ) {
			add_submenu_page( getter ( "__SLUG__" , "_main" ), getter ( "__TITLE__" , "_subPlugin" ), getter ( "__MENU__" , "_subPlugin" ), USER_CAPABILITY, getter ( "__SLUG__" , "_subPlugin" ), getter ( "__FUNCTION__" , "_subPlugin" ) );
		}
	}
}

class PTB_DatabaseHandler { 
	
	public function removeTable(){
		global $wpdb;
		$tableName = PTB_TABLE_NAME;
		$sql = "DROP TABLE $tableName;";
		$wpdb->query( $sql );
	}
	
}