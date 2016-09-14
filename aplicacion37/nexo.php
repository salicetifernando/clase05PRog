<?php
include_once "contar.php";
$palabra = $_POST['palabra'] ;
$accion = $_POST['enviar'];
if ($accion == "enviar") 
{
	archivo::Escribo($palabra);	# code...
	header("location:index.html");
}else
{
	echo "<br>". "NO PASO NADA";
}

//header("location:index.html");

?>