<header>Borrado de noticia</header>

<?php
//recojo el id de noticia que quiero borrar
$id_not=$_GET['id_not'];

//Establezco la consulta de eliminacion y la ejecuto
$sql="DELETE FROM noticias WHERE id_not=$id_not";
$consulta=$conexion->query($sql);

//Si se ha ejecutado lo digo, y sino tambien lo digo
if($consulta==true){
	echo 'Eliminado con exito';
	header('location:index.php?p=listado.php');
}else{
	echo 'Ha habido un problema al eliminar.';
}

?>