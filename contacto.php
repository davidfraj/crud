<header>Formulario de contacto</header>

<?php
if(isset($_POST['enviar'])){
	$destino='davidfraj@gmail.com';
	$asunto='Nuevo contacto desde la web';
	$mensaje='Ha contactado contigo '.$_POST['nombre'].', cuyo correo electronico es '.$_POST['correo'];
	$mensaje.='El mensaje que te ha escrito es '.$_POST['comentario'];

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: David Fraj Blesa <correo@dominio.com>\r\n";

	//Enviamos el correo:
	if(mail($destino,$asunto,$mensaje,$headers)){
		echo 'ENVIADO CON EXITO';
	}else{
		echo 'ERROR';
	}
}
?>

<form method="post" action="index.php?p=contacto.php">
	<fieldset>
		<legend>Rellena los campos</legend>

		<span>Escribe tu nombre:</span>
		<input type="text" name="nombre">
		<br>

		<span>Escribe tu correo:</span>
		<input type="text" name="correo">
		<br>

		<span>Escribe tu comentario</span>
		<textarea name="comentario"></textarea>
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</fieldset>
</form>