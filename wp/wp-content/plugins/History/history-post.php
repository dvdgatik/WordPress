<?php 
//Creamos el metabox

function c7_meta_box() {
	//Funcion de WordPress
	add_meta_box('c7_info', 'Nota' , 'c7_info_content', 'history','normal', 'high');

	/*
	 parametros
	1: id
	2: titulo del metabox
	3: callback funcion  
	4: donde se va a mostrar (en que post type)
	5: context: donde guardarlo (lateral, normal)
	6:prioridad: metabox lo mas importante es arriba lo menos abajo
	high

	esta funcion tiene que ser agregada al hook add meta boxes

	Un metabox nos permite añadir campos extra a la pagina de edicion de wordpress
	este puede arrastrarse
	*/

 }

 add_action('add_meta_boxes', 'c7_meta_box');

 function c7_info_content($post) {
 	//parametro post me permite traer los datos del post 
 	//esta funcion evita que se creen datos que no sean de este formulario (provenga del sitio actual y no de otra parte)
 	$values = get_post_custom($post->ID);
 	//Recupera los campos de post meta, basados ​​en la ID de la publicación y es un array

 	$nota = isset($values['c7_nota']) ? esc_attr($values['c7_nota'][0]) : '';

 	/*Verifico que esta creada, creo el valor y limpio el texto  y si no traer un text vacio*/
     wp_nonce_field('c7_meta_box_nonce','meta_box_nonce')
 	?>

 	<div>
 		<textarea name="c7_nota" id="c7_nota" cols="30" rows="10"><?php echo $nota; ?></textarea>
 	</div>
 	<?php
 	// c7_nota se guardaria como un post_meta que es la forma en que guarda datos extra a nuestro post

 }

 /*funcion que se encargue de guardar los datos post_meta
  Parametro
  post_id: seria el post_id que se crea
 */

//Esta funcion debe guardarse en un hook al momento que se guarda el post
add_action('save_post', 'c7_save_meta');

function c7_save_meta($post_id) {
	//usamos una serie de condicionales por seguridad
	//evitar que wordpress se guarde cuando tenga la funcion de autoguardado
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	//verificamos si se envio el nonce
	if (!isset($_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'],'c7_meta_box_nonce')) return;
	//va a verificar si los datos vienen del mismo form si es diferente regresa un return
	//Una capa de seguridad mas 
	//Si el usuario no tiene la opcion de editar, no lo pueda hacer
	if (!current_user_can('edit_post')) return;
	//Estas medidas de seguridad usar siempre cuando quieras guardar post metas

	//Guardamos el c7_nota
	if (isset($_POST['c7_nota'])) {
		update_post_meta($post_id, 'c7_nota', esc_attr($_POST['c7_nota']));
		/*
		1: id del post donde voy a guardar
		2: nombre del post meta igual que el name
		3: valor del post_meta

	Por seguridad usar esc_attr la cual permite limpiar el texto que ingresa para agregarle atributos HTML
	y otras cosas que puedan alterar el WordPressz
		*/
	}

}

 ?>
