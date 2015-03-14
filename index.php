<?php
//Incluyo la conexion
include('includes/conexion.php');

//Recojo la pagina a cargar en el id='contenido'
if(isset($_GET['p'])){
	$p=$_GET['p'];
}else{
	$p='listado.php';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Web de noticias</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<section id="wrapper">
		<header id="encabezado">
			<img src="imagenes/encabezado.jpg">
		</header>
		<section id="central">
			<nav id="menu">
				<?php include('includes/menu.php');?>
			</nav>
			<div id="contenido">
				<?php include($p);?>
			</div>
		</section>
		<footer id="pie">
			CONTENIDO DEL PIE DE PAGINA CON ....
		</footer>
	</section>
</body>
</html>
<?php
//Cierro la conexion a la bbdd
$conexion->close();
?>