<?php 
add_action('admin_menu', 'c7hd_customer_options');
function c7hd_customer_options() {
	add_options_page('History Developer','History','manage_options','c7hd','c7hd_settings_page');
}

function c7hd_settings_page() {
 echo '<h1>History Developer<h1>';
}

 ?>