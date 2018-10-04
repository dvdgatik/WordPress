<?php 
//Creamos el metabox

function c7_meta_box() {
	//Funcion de WordPress
	add_meta_box('c7_info', 'Nota' , 'c7_info_content', 'history','normal', 'high');

	/*
	primer parametro
	id
	titulo del metabox
	callback funcion  
	donde se va a mostrar (en que post type)
	context: donde guardarlo (lateral, normal)
	prioridad: metabox lo mas importante es arriba lo menos abajo
	high

	esta funcion tiene que ser agregada al hook add meta boxes

	Un metabox nos permite añadir campos extra a la pagina de edicion de wordpress
	este puede arrastrarse
	*/

 }

 add_action('add_meta_boxes', 'c7_meta_box');

 ?>
