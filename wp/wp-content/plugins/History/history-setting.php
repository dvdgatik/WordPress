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
 	<?php $numero_nota = get_option('c7_note_numero'); 
 			if(empty($numero_nota)) $numero_nota = 0;
 		?>
 	<input type="hidden" name="c7_note_numero" value="<?php echo ($numero_nota + 1); ?>">
 	<div class="c7-form-group">
 		<label for="c7_note">Ingresar tu nota</label>
 		<textarea name="c7_notes_<?php echo $numero_nota; ?>[nota]" id="c7_note" class="c7-input"></textarea>
 		<input type="hidden" name="c7_notes_<?php echo $numero_nota ?>[date]" value="<?php echo date('d-m-y H:i'); ?>">
 		<?php 
 		/*
 		Podemos serializar los datos
		Esto quiere decir que WordPress nos permite guardar los datos en un array y ese array se guarda en un solo campo
		en la tabla options
		WordPress los serializa
		y despues los deserializa
 		*/
 		 ?>
 	</div>
 	<?php submit_button(); ?>
 </form>
 <?php
  //$nota= get_option("c7_note"); 
  //echo "Nota: ".$nota;

  /*Imprimir como si fuera un array*/
  //print_r($nota);
  ?>

<?php if($numero_nota > 0) { ?>
	<h2>Listado de notas</h2>
	<?php for ($i=($numero_nota-1); $i >= 0 ; $i= $i-1) {
		$nota = get_option('c7_notes_'.$i); 
		?>
	 <div class="c7-nota">
	 	<p><?php echo $nota['nota'];?></p>
	 	<p><?php echo $nota['date']; ?></p>
	 </div>
	<?php } ?>



 <?php
}

}

//Crear una funcion que se encargue de  guardar cada dato

function c7_customer_register_settings() {
	register_setting('c7_fields_options', 'c7_note_numero'); //se encarga de registrar cambios en la base de datos
	$numero_nota = get_option('c7_note_numero'); 
	register_setting('c7_fields_options', 'c7_notes_'.$numero_nota);
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