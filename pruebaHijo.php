<?php
include "prueba.php";

class Hijo extends Padre
{
	
	function __construct()
	{
		$this->Mostrar();
	}

	
}

$hijo = new Hijo();

?>
