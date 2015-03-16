<?php
//Recojo el id de noticia
$id_not=$_GET['id_not'];
//Hago una consulta a la bbdd sobre esa noticia
$sql="SELECT * FROM noticias WHERE id_not=$id_not";
//Ejecuto la consulta
$consulta=$conexion->query($sql);
//Extraigo en $fila, la UNICA noticia que coincide con $id_not
$fila=$consulta->fetch_array();
?>

<header>Modificar noticia</header>
<form method="post" action="index.php?p=modificacion.php" enctype="multipart/form-data">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Titulo noticia</span>
		<input type="text" name="titulo_not" value="<?php echo $fila['titulo_not'];?>">
		<br>

		<span>Imagen noticia</span>
		<input type="file" name="imagen_not">
		<img src="imagenes/<?php echo $fila['imagen_not'];?>" width="100">
		<input type="hidden" name="imagen_not_actual" value="<?php echo $fila['imagen_not'];?>">
		<br>

		<span>Contenido noticia</span>
		<textarea name="contenido_not"><?php echo $fila['contenido_not'];?></textarea>
		<br>

		<input type="hidden" name="id_not" value="<?php echo $fila['id_not'];?>">

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>