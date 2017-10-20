<?php 
register_nav_menus(array(
'menu' => "Menu Superior",
'menu_footer' => "Menu Inferior",

	));
 /*Le indicamos a wordpress que registre un nuevo menu este aparecera en la parte de apariencia del wordpress*/

 /*Para agregar otro menu simplemente se agrega otro elemento al arreglo*/



 /*----- Agregar thumbnails al tema---------*/
 
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470, 300, true); //tamano de imagen en sidebar
add_image_size('list_articles_thumbs', 450, 370, true);//tamano de imagen en la lista


/*------Agregando sidebar---------------*/

register_sidebar(array(
	'name'=>"Sidebar",
	'before_widget' => "<section class='widget'>",
	'after_widget' => "</section>",
	'before_title' => "<h3>",
	'after_title' => "</h3>"
	));
/*En esta parte del codigo se declara cual es el area de widgets y estara encerrado con una etiqueta section y clase widget y los titulos tendran un H3*/


/*------------Lo mismo para footer----------*/


register_sidebar(array(
	'name'=>"Footer",
	'before_widget' => "<section class='widget'>",
	'after_widget' => "</section>",
	'before_title' => "<h3>",
	'after_title' => "</h3>"
	));

 ?>


