<header>Alta de noticia realizada</header>

<?php
//Recoger los datos de la pagina insertar.php
$titulo_not=$_POST['titulo_not'];
$contenido_not=$_POST['contenido_not'];
$imagen_not=$_FILES['imagen_not']['name'];

//Como hay una imagen, lo subimos a su sitio
move_uploaded_file($_FILES['imagen_not']['tmp_name'], 'imagenes/'.$imagen_not);

//Tenemos que insertar los datos en la BBDD
$sql="INSERT INTO noticias(titulo_not, contenido_not, imagen_not) VALUES ('$titulo_not', '$contenido_not', '$imagen_not')";
$consulta=$conexion->query($sql);

//Segun como han ido las cosas, mostramos un mensaje al usuario
if($consulta==true){
	echo 'Insertado con exito';
	//Esto es para volver automaticamente al index
	header('location:index.php?p=listado.php');
}else{
	echo 'Ha habido un problema al insertar';
}

?>