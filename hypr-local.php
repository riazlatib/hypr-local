<?php
/*
Plugin Name: Hypr-Local
Plugin URI: http://riazlatib.com
Description: A traffic analysis app that displays real time traffic along with social trends based on twitter traffic
Version: 0.1
Author: Riaz Latib
Author URI: http://riazlatib.com
License: GPL2
*/

// Add Dashboard Menu Page
 add_action( 'admin_menu', 'hypr_local' );

 function hypr_local(){
   add_dashboard_page( 'Hypr-Local', 'HYPR', 'manage_options', 'hypr_local', 'custom_menu_page', plugins_url( '/images/icon.png' ), 1 );
 }

function custom_menu_page(){
  include 'includes/home.php';
}
?>
