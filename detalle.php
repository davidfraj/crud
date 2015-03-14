<?php
//Recojo el id_not que quiero mostrar
$id_not=$_GET['id_not'];
$sql="SELECT * FROM noticias WHERE id_not=$id_not";
$consulta=$conexion->query($sql);
if($fila=$consulta->fetch_array()){
	?>
	<header><?php echo $fila['titulo_not'];?></header>
	<article>
		<img src="imagenes/<?php echo $fila['imagen_not'];?>">
		<?php echo $fila['contenido_not'];?>
	</article>
	<?php
}else{
	echo 'Noticia no encontrada';
}
?>