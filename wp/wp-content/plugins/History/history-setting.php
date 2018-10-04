<?php 
add_action('admin_menu', 'c7hd_customer_options');
function c7hd_customer_options() {
	add_options_page('History Developer','History','manage_options','c7hd','c7hd_settings_page');
}

function c7hd_settings_page() { ?>
 <h1>History Developer<h1>
 <p>Listado de notas para desarrolladores</p>

 <form action="options.php" method="post">
 	<?php 
 	settings_fields('c7_fields_options');
 	//brinda todas las opciones necesarias para que pueda almacenar datos 
 	//tiene que estar adentro de la etiqueta form 
 	//Creamos un grupo de campos que estaran guradados bajo esta funcion
 	?>

 	<div class="c7-form-group">
 		<label for="c7_note">Ingresar tu nota</label>
 		<textarea name="c7_note" id="c7_note" class="c7-input"></textarea>
 	</div>
 	<?php submit_button(); ?>
 </form>
 <?php
  $nota= get_option("c7_note"); 
  echo "Nota: ".$nota;
  ?>
 <h2>Listado de notas</h2>

 <div class="c7-nota">
 	<p>Mi primera nota</p>
 	<p>7 de abril del 2017</p>
 </div>
  <div class="c7-nota">
 	<p>Mi primera nota</p>
 	<p>7 de abril del 2017</p>
 </div>
  <div class="c7-nota">
 	<p>Mi primera nota</p>
 	<p>7 de abril del 2017</p>
 </div>
  <div class="c7-nota">
 	<p>Mi primera nota</p>
 	<p>7 de abril del 2017</p>
 </div>

 <?php

}

//Crear una funcion que se encargue de  guardar cada uno de los datos

function c7_customer_register_settings() {
	register_setting('c7_fields_options', 'c7_note'); //se encarga de registrar cambios en la base de datos
	/*
		primer parametro: grupo que creaste dentro del form
		segundo parametro: nombre del campo en este caso del textarea
	*/
}
// hook para almacenarlo
add_action('admin_init', 'c7_customer_register_settings');



/*
options.php: archivo que recibe todas las opciones del
panel de administracion

Es importante poner un alias para no modificar los estilos
de otros plugins

Crear carpeta para estilos y js "assets"

Recordar que los plugins son escalables se le pueden añadir mas cosas mas adelante por eso hay que llevar un orden
*/

 ?>