<?php 
/*
Plugin Name: Obfuscate Admin
Plugin URI: https://jasonwhite.uk/plugins/obfuscate-admin
Description: This plugin provides a mechanism to obfuscate admin
Author: Jason White
Version: 1.0.1
Author URI: https://jasonwhite.uk
*/   
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function ijw_setup_admin_menus() {
    add_menu_page('ObfuscateAdmin', 'Obfuscate Admin', 'manage_options', 
        'obfuscate_admin_settings', 'ijw_obfuscate_admin_settings_page','dashicons-hidden',2);
} 
// We also need to add the handler function for the top level menu
function ijw_obfuscate_admin_settings_page() {
    include_once( realpath(__DIR__).'/oa_settings.php');
}
add_action("admin_menu", "ijw_setup_admin_menus");
function ijw_obfuscate_admin_nope(  ) {
	//obfuscate
	header("HTTP/1.0 404 Not Found");
	exit;
}
$oa_host = sanitize_text_field(get_option( 'oa-whitelist-hostname' )) ;
if ( ($_SERVER['HTTP_CF_CONNECTING_IP'] == gethostbyname($oa_host)) || ($_SERVER['REMOTE_ADDR']  == gethostbyname($oa_host)) ){
	//do nothing
} elseif (is_admin() && !empty($oa_host) ) {	
	//obfuscate
	header("HTTP/1.0 404 Not Found");
	exit;
} else {
	add_action( 'login_head', 'ijw_obfuscate_admin_nope' );	
}

	