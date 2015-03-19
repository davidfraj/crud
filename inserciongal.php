<?php
if($_SESSION['conectado']){
?>

<header>Alta de imagen realizada</header>

<?php
//Recoger los datos de la pagina insertar.php
$descripcion_ima=$_POST['descripcion_ima'];
$archivo_ima=$_FILES['archivo_ima']['name'];

//Como hay una imagen, lo subimos a su sitio
move_uploaded_file($_FILES['archivo_ima']['tmp_name'], 'galerias/'.$archivo_ima);

//Tenemos que insertar los datos en la BBDD
$sql="INSERT INTO imagenes(descripcion_ima, archivo_ima) VALUES ('$descripcion_ima', '$archivo_ima')";
$consulta=$conexion->query($sql);

//Segun como han ido las cosas, mostramos un mensaje al usuario
if($consulta==true){
	echo 'Insertado con exito';
	//Esto es para volver automaticamente al index
	header('location:index.php?p=galeria.php');
}else{
	echo 'Ha habido un problema al insertar';
}

?>

<?php
}
?>