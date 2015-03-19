<?php
if($_SESSION['conectado']){
?>

<header>Alta de imagen</header>

<form method="post" action="index.php?p=inserciongal.php" enctype="multipart/form-data">

	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Imagen</span>
		<input type="file" name="archivo_ima">
		<br>

		<span>Descripcion</span>
		<textarea name="descripcion_ima"></textarea>
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
	
</form>

<?php
}
?>