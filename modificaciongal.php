<?php
if($_SESSION['conectado']){
?>

<header>Modificacion de imagen</header>

<?php
//Recoger los datos de la pagina modificar
$archivo_ima_actual=$_POST['archivo_ima_actual'];
$descripcion_ima=$_POST['descripcion_ima'];
$id_ima=$_POST['id_ima'];

$archivo_ima=$_FILES['archivo_ima']['name'];

//Subir la imagen si fuera necesario
if(is_uploaded_file($_FILES['archivo_ima']['tmp_name'])){
	//Borro la anterior
	unlink('galerias/'.$archivo_ima_actual);
	//Pongo en su sitio la nueva
	move_uploaded_file($_FILES['archivo_ima']['tmp_name'], 'galerias/'.$archivo_ima);
}else{
	$archivo_ima=$archivo_ima_actual;
}

//Establecer consulta de modificacion
$sql="UPDATE imagenes SET archivo_ima='$archivo_ima', descripcion_ima='$descripcion_ima' WHERE id_ima=$id_ima";

//Ejecutamos la consulta
$consulta=$conexion->query($sql);

//mostramos un mensaje al usuario
if($consulta==true){
	echo 'Modificado con exito';
	//Esto es para volver automaticamente al index
	header('location:index.php?p=galeria.php');
}else{
	echo 'Ha habido un problema al modificar';
}

?>

<?php
}
?>