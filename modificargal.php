<?php
if($_SESSION['conectado']){
?>

<?php
//Recojo el id de imagen
$id_ima=$_GET['id_ima'];
//Hago una consulta a la bbdd sobre esa imagen
$sql="SELECT * FROM imagenes WHERE id_ima=$id_ima";
//Ejecuto la consulta
$consulta=$conexion->query($sql);
//Extraigo en $fila, la UNICA imagen que coincide con $id_ima
$fila=$consulta->fetch_array();
?>

<header>Modificar imagen</header>
<form method="post" action="index.php?p=modificaciongal.php" enctype="multipart/form-data">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Imagen</span>
		<input type="file" name="archivo_ima">
		<img src="galerias/<?php echo $fila['archivo_ima'];?>" width="100">
		<input type="hidden" name="archivo_ima_actual" value="<?php echo $fila['archivo_ima'];?>">
		<br>

		<span>Descripcion imagen</span>
		<textarea name="descripcion_ima"><?php echo $fila['descripcion_ima'];?></textarea>
		<br>

		<input type="hidden" name="id_ima" value="<?php echo $fila['id_ima'];?>">

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>

<?php
}
?>