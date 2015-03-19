<?php
if($_SESSION['conectado']){
?>

<header>Alta de noticia</header>
<form method="post" action="index.php?p=insercion.php" enctype="multipart/form-data">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Titulo noticia</span>
		<input type="text" name="titulo_not">
		<br>

		<span>Imagen noticia</span>
		<input type="file" name="imagen_not">
		<br>

		<span>Contenido noticia</span>
		<textarea name="contenido_not"></textarea>
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>

<?php
}
?>

<?php
}
?>