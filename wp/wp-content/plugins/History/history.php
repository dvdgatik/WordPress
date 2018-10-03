<?php 
/* Cabecera
Plugin Name: C7 History Developer
Plugin URI: http://davidgatica.esy.es
Description: Have a history of what you are building in the project.
Version: 1.0
Author: David Gatica
Autor URI: http://davidgatica.esy.es
*/
define('C7HD_ROOTDIR', plugin_dir_path(__FILE__));
define('C7HD_URLPLUGIN', plugin_dir_url(__FILE__));

//Funcion para agregar CSS
/*parametros
alias
ruta
false header
true footer
*/
function c7_admin_assets() {
	wp_enqueue_style('c7_admin_css', C7HD_URLPLUGIN .'assets/css/main.css', false, '1.0');
}

add_action('admin_enqueue_scripts', 'c7_admin_assets');
//agrega la funcion de estilos justo cuando carga los scripts con el hook

//hook ejecutar funciones cuando WordPress haga algo
require_once(C7HD_ROOTDIR.'history-setting.php');

 ?>

 