
<?php
//1.- Si no existe mi variable de session, la creo
if(!isset($_SESSION['conectado'])){
	$_SESSION['conectado']=NULL;
}

//2.- Comprobamos el usuario y la clave
if(isset($_POST['conectar'])){
	$usuario=$_POST['usuario'];
	$clave=md5($_POST['clave']);

	$sql="SELECT * FROM usuarios WHERE correo_usu='$usuario' AND clave_usu='$clave'";
	$consulta=$conexion->query($sql);

	if($fila=$consulta->fetch_array()){
		$_SESSION['conectado']=$usuario;
	}
	
}

//3.- Para desconectarnos de la session
if(isset($_GET['desconectar'])){
	$_SESSION['conectado']=NULL;
}

//4.- Si estoy conectado, que me de un mensaje de bienvenida
if($_SESSION['conectado']){
	echo 'Bienvenido '.$_SESSION['conectado'].' - ';
	echo '<a href="index.php?desconectar=si"><button>Desconectar</button></a>';
}else{
	//Sino, muestro el formulario para que se conecte
?>
<form method="post" action="index.php">
	<input type="text" name="usuario" placeholder="usuario">
	<input type="password" name="clave" placeholder="clave">
	<input type="submit" name="conectar" value="conectar">
</form>
<?php
}
?>