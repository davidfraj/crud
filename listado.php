<header>Listado de noticias</header>
<?php
$sql="SELECT * FROM noticias ORDER BY id_not DESC";
$consulta=$conexion->query($sql);
while($fila=$consulta->fetch_array()){
	?>
	<article>
		<a href="index.php?p=detalle.php&id_not=<?php echo $fila['id_not'];?>">
			<img src="imagenes/<?php echo $fila['imagen_not'];?>">
			<?php echo $fila['titulo_not'];?>
		</a>


		<?php
		if($_SESSION['conectado']){
		?>

		-
		<a href="index.php?p=borrar.php&id_not=<?php echo $fila['id_not'];?>" onCLick="return confirm('Estas seguro?');"><button>Borrar</button></a>
		-
		<a href="index.php?p=modificar.php&id_not=<?php echo $fila['id_not'];?>"><button>Modificar</button></a>

		<?php
		}
		?>

	</article>
	<?php
}
?>
