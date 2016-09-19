<?php

include_once("PHP/estacionamiento.php");
$variableTexto = $_POST['texto'];

//echo "$_POST[ingreso]";
//var_dump($_POST);

if (isset($_POST["ingreso"])) 
{
	$patente = $_POST ["texto"];
	//estacionamiento::Guardar($patente);
	$miListado = estacionamiento::Leer();
	var_dump($miListado);
	echo"ingreso correcto";
}
else
{
	estacionamiento::SacarPatente($_POST["texto"]);
	echo"salir correcto";
}
?>