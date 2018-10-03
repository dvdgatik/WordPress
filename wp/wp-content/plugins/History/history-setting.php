<?php 
add_action('admin_menu', 'c7hd_customer_options');
function c7hd_customer_options() {
	add_options_page('History Developer','History','manage_options','c7hd','c7hd_settings_page');
}

function c7hd_settings_page() { ?>
 <h1>History Developer<h1>
 <p>Listado de notas para desarrolladores</p>

 <form action="index.html" method="post">
 	<div class="c7-form-group">
 		<label for="c7_note">Ingresar tu nota</label>
 		<textarea name="c7_note" id="c7_note" class="c7-input"></textarea>
 	</div>
 </form>
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



/*
options.php: archivo que recibe todas las opciones del
panel de administracion

Es importante poner un alias para no modificar los estilos
de otros plugins

Crear carpeta para estilos y js "assets"

Recordar que los plugins son escalables se le pueden añadir mas cosas mas adelante por eso hay que llevar un orden
*/

 ?>