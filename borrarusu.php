<?php
if($_SESSION['conectado']){
	
	//Hago una consulta a la bbdd 
	$correo_usu=$_SESSION['conectado'];
	$sql="DELETE FROM usuarios WHERE correo_usu='$correo_usu'";
	//Ejecuto la consulta
	$consulta=$conexion->query($sql);

	if($consulta==true){
		echo 'Eliminado con exito';
		$_SESSION['conectado']=null;
		header('location:index.php');
	}else{
		echo 'Error al darte de baja';
	}

}
?>