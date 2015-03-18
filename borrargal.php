<header>Borrado de imagen</header>

<?php
//recojo el id de noticia que quiero borrar
$id_ima=$_GET['id_ima'];

//Establezco la consulta de eliminacion y la ejecuto
$sql="DELETE FROM imagenes WHERE id_ima=$id_ima";
$consulta=$conexion->query($sql);

//Si se ha ejecutado lo digo, y sino tambien lo digo
if($consulta==true){
	echo 'Eliminado con exito';
	header('location:index.php?p=galeria.php');
}else{
	echo 'Ha habido un problema al eliminar.';
}

?>