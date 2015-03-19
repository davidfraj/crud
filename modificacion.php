<?php
if($_SESSION['conectado']){
?>

<header>Modificacion de noticia</header>

<?php
//Recoger los datos de la pagina modificar
$titulo_not=$_POST['titulo_not'];
$imagen_not_actual=$_POST['imagen_not_actual'];
$contenido_not=$_POST['contenido_not'];
$id_not=$_POST['id_not'];

$imagen_not=$_FILES['imagen_not']['name'];

//Subir la imagen si fuera necesario
if(is_uploaded_file($_FILES['imagen_not']['tmp_name'])){
	//Borro la anterior
	unlink('imagenes/'.$imagen_not_actual);
	//Pongo en su sitio la nueva
	move_uploaded_file($_FILES['imagen_not']['tmp_name'], 'imagenes/'.$imagen_not);
}else{
	$imagen_not=$imagen_not_actual;
}

//Establecer consulta de modificacion
$sql="UPDATE noticias SET titulo_not='$titulo_not', imagen_not='$imagen_not', contenido_not='$contenido_not' WHERE id_not=$id_not";

//Ejecutamos la consulta
$consulta=$conexion->query($sql);

//mostramos un mensaje al usuario
if($consulta==true){
	echo 'Modificado con exito';
	//Esto es para volver automaticamente al index
	header('location:index.php?p=listado.php');
}else{
	echo 'Ha habido un problema al modificar';
}

?>

<?php
}
?>