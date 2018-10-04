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


add_action('init', 'c7_admin_init');

function c7_admin_init() {
	register_post_type('history',  array(
		'labels' => array('name'=>'History', 'singular_name' => 'Nota'),
		'public' => TRUE,
		'rewrite' => array('history'),
		'has_archive' => TRUE,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'author')

	 )); //permite registrar un post type
	/*
	primer parametro: texto del post type
	segundo parametro: arreglo de opciones
		en la documentacion de wordpress puedes ver muchos hasta de como modificar botones y listas

	labels
		name: nombre que ira en la columna
		singular_name: como se llamara a cada post de ese post type
	public
		Me dice si el post type sera visible para los autores
	rewrite
		slug de ese post type
	has_archive
		para que pueda ser listado en nuestra pagina web
	menu_icon
		definir un icono para diferenciarlo
			podemos encontrarlo en la pagina de wordpress dashicons
	supports
			que opciones va a tener mi post_type
			 titulo
			 editor (procesador de texto de wordpress)
			 autor
			 imagen destacada
	Todas las funciones de WordPress tienen que ser agregadas en un hook
	el plugin wocommerce crea un post type de productos
	para foros o cualquier otra cosa eventos,productos ect se crean post types
	*/

}

add_action('admin_enqueue_scripts', 'c7_admin_assets');
//agrega la funcion de estilos justo cuando carga los scripts con el hook

//hook ejecutar funciones cuando WordPress haga algo
require_once(C7HD_ROOTDIR.'history-setting.php');
require_once(C7HD_ROOTDIR.'history-post.php');

 ?>

 