<?php

function ptb_about(){
	echo file_get_contents(PT_API_URL."/?get=about");
}

function ptb_display(){
	echo file_get_contents(PT_API_URL."/".PTB_PLUGIN_NAME."/?get=details");
}