<header>Galeria de imagenes</header>
<?php
$sql="SELECT * FROM imagenes";
$consulta=$conexion->query($sql);
while($fila=$consulta->fetch_array()){
	?>
	<div class="imagen">
		<img src="galerias/<?php echo $fila['archivo_ima'];?>">
		<p><?php echo $fila['descripcion_ima'];?></p>
		<div>
			<a href="index.php?p=modificargal.php&id_ima=<?php echo $fila['id_ima'];?>"><button>modificar</button></a>
			<a href="index.php?p=borrargal.php&id_ima=<?php echo $fila['id_ima'];?>" onClick="return confirm('Estas seguro?');"><button>borrar</button></a>
		</div>
	</div>
	<?php
}
?>