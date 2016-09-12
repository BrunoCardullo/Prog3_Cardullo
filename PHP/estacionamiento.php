<?php
/**
* 
*/
class Estacionamiento{

	public static function Guardar($patente)
	{
		$archivo = fopen("estacionados.txt", "a");
		$ahora =date("Y-m-d H:i:s");
		$renglon =$patente."=>".$ahora."\n";
		fwrite($archivo, $renglon);
		fclose($archivo);
	}

	public static function Leer()
	{
		$listadoDeAutos = array();
		//$listadoDeAutosLeida["primer elemento"]; //Agrega elemento al array
		$archivo = fopen("estacionados.txt", "r");

		while (!FeoF($archivo)) 
		{
			$renglon = fgets($archivo); //lectura linea a linea
			$listadoDeAutos[] = $renglon;
		}
		fclose($archivo);
		return $listadoDeAutos;
	}
	
}

?>