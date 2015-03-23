<?php
if($_SESSION['conectado']){
?>

<?php
//Hago una consulta a la bbdd 
$correo_usu=$_SESSION['conectado'];
$sql="SELECT * FROM usuarios WHERE correo_usu='$correo_usu'";
//Ejecuto la consulta
$consulta=$conexion->query($sql);
//Extraigo en $fila, la UNICA 
$fila=$consulta->fetch_array();
?>

<header>Modificar Usuario</header>
<form method="post" action="index.php?p=modificacionusu.php">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Nombre usuario</span>
		<input type="text" name="nombre_usu" value="<?php echo $fila['nombre_usu'];?>">
		<br>

		<span>Correo usuario</span>
		<input type="text" name="correo_usu" value="<?php echo $fila['correo_usu'];?>">
		<br>

		<span>Clave usuario</span>
		<input type="password" name="clave_usu">
		<br>

		<span>Repite Clave usuario</span>
		<input type="password" name="clave_usu_repite">
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>

<hr>

<a href="index.php?p=borrarusu.php">Darte de baja de la web</a>

<?php
}
?>