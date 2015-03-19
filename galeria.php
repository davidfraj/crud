<header>Galeria de imagenes</header>
<?php
$sql="SELECT * FROM imagenes";
$consulta=$conexion->query($sql);
while($fila=$consulta->fetch_array()){
	?>
	<div class="imagen">

		<a href="galerias/<?php echo $fila['archivo_ima'];?>" data-lightbox="grupo">
			<img src="galerias/<?php echo $fila['archivo_ima'];?>">
		</a>

		<p><?php echo $fila['descripcion_ima'];?></p>

		<?php
		if($_SESSION['conectado']){
		?>

		<div>
			<a href="index.php?p=modificargal.php&id_ima=<?php echo $fila['id_ima'];?>"><button>modificar</button></a>
			<a href="index.php?p=borrargal.php&id_ima=<?php echo $fila['id_ima'];?>" onClick="return confirm('Estas seguro?');"><button>borrar</button></a>
		</div>

		<?php
		}
		?>


	</div>
	<?php
}
?>