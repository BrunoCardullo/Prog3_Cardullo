<?php

include_once("PHP/estacionamiento.php");
$variableTexto = $_POST['texto'];

//echo "$_POST[ingreso]";
//var_dump($_POST);

if ($_POST["ingresar"] == "Ingresar") 
{
	$patente = $_POST ["texto"];
	//estacionamiento::Guardar($patente);
	$miListado = estacionamiento::Leer();
	var_dump($miListado);
	echo"ingreso correcto";
}
else
echo"salir correcto";
?>