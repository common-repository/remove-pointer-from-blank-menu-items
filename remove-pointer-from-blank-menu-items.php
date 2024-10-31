<?php /** 
* Plugin Name: Remove Pointer from Blank Menu Items
* Description: Automagically removes the href from blank/hash hyperlinks so they no longer look clickable.
* Author: Worcester Web Studio
* Author URI: https://www.worcesterwebstudio.com/
* Version: 1.0.2.8 */ 

function wws_rg_remove_hash_links( $menu ) {
    return str_replace( '<a href="#">', '<a>', $menu );
}

add_filter( 'wp_nav_menu_items', 'wws_rg_remove_hash_links' );

add_action('init', 'wws_register_script_and_css_menu');

function wws_register_script_and_css_menu() {
	wp_register_style('wws_link_css', plugins_url('/css/wws-link.css', __FILE__), false, '1.0.0', 'all');
		wp_enqueue_style('wws_link_css');

}
?>