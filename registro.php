
<header>Registro de usuario</header>
<form method="post" action="index.php?p=registro2.php" enctype="multipart/form-data">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Nombre del usuario</span>
		<input type="text" name="nombre_usu">
		<br>

		<span>Correo del usuario</span>
		<input type="text" name="correo_usu">
		<br>

		<span>Clave del usuario</span>
		<input type="password" name="clave_usu">
		<br>

		<span>Repite Clave del usuario</span>
		<input type="password" name="clave_usu_repite">
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>

