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
			//$listadoDeAutos[] = $renglon;
			$auto = explode("=>", $renglon);
			$listadoDeAutos[] = $auto;
		}

		fclose($archivo);
		return $listadoDeAutos;
	}

	public static function SacarPatente($patente)
	{
		$milistadoEstacionado= estacionamiento::Leer();

		foreach ($milistadoEstacionado as $auto) 
		{
			if ($patente == $auto[0]) 
			{
				$ahora = date("Y-m-d H:i:s");
				$diferencia = strtotime($ahora) - strtotime($auto[1]);
				echo "Tiempo transcurrido .$diferencia";
			}
		}
	}
	
}

?>