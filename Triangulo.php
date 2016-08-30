 <?php

 class Triangulo extends FiguraGeometrica
{
	private $_altura;
	private $_base;

	function __construct($b, $h)
	{
		$this-> $_altura = $h;
		$this-> $_base = $b;
	}

	protected function CalcularDatos()
	{

	} 

	public function Dibujar()
	{

	}

	public function ToString()
	{

	}
}

?>