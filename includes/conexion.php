<?php
$servidor='localhost';
$usuario='root';
$clave='';
$basedatos='miweb';
$conexion=new Mysqli($servidor, $usuario, $clave, $basedatos);

$conexion->set_charset('utf8');

?>