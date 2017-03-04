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
   add_dashboard_page( 'Hypr-Local', 'HL', 'manage_options', 'work', 'my_custom_menu_page', plugins_url( 'test/images/icon.png' ), 1 );
 }

 include 'includes/home.php';

 // Deactivate Update Notification
 add_filter('site_transient_update_plugins', 'remove_update_notification');
 function remove_update_notification($value) {
      unset($value->response[ plugin_basename(__FILE__) ]);
      return $value;
 }
?>
