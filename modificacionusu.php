<header>Modificacion de usuario - Finalizado</header>
<?php
$nombre_usu=$_POST['nombre_usu'];
$correo_usu=$_POST['correo_usu'];
$clave_usu=$_POST['clave_usu'];
$clave_usu_repite=$_POST['clave_usu_repite'];

//////////////////////////////////////////////
//Aqui podria comprobar varios datos.......
$datoscorrectos=true;
$mensaje='';
//Comprobamos la contraseña
if($clave_usu!=$clave_usu_repite){
	$datoscorrectos=false;
	$mensaje.='Las contraseñas no coinciden<br>';
}

//Comprobamos que el usuario NO esta en la base de datos
$sql="SELECT * FROM usuarios WHERE correo_usu='$correo_usu'";
$consulta=$conexion->query($sql);
if($fila=$consulta->fetch_array()){
	$datoscorrectos=false;
	$mensaje.='La direccion de correo, ya existe<br>';
}

//////////////////////////////////////////////
///////////////////////////////////////////////

if($datoscorrectos==true){

	$nombre_usu_actual=$_SESSION['conectado'];

	if(strlen($clave_usu)>0){
		//El usuario ha escrito una clave
		$clave_usu=md5($clave_usu);
		$sql="UPDATE usuarios SET nombre_usu='$nombre_usu', correo_usu='$correo_usu', clave_usu='$clave_usu' WHERE correo_usu='$nombre_usu_actual'";
	}else{
		//El usuario NO ha escrito clave
		$sql="UPDATE usuarios SET nombre_usu='$nombre_usu', correo_usu='$correo_usu' WHERE correo_usu='$nombre_usu_actual'";
	}

	$consulta=$conexion->query($sql);

	if($consulta==true){
		echo 'modificacion realizada con exito';
	}else{
		echo 'Ha habido un error';
	}

}else{

	echo $mensaje;
	echo '<a href="index.php?p=registro.php">Volver</a>';

}

?>
