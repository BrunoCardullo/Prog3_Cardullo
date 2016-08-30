<html>
<head>
	<title>Rectangulo</title>
</head>
<body>

	<?php

	class Rectangulo extends FiguraGeometrica
{
	private $_ladoDos;
	private $_ladoUno;


	function __construct($l1, $l2)
	{
		$this-> $_ladoUno = $l1;
		$this-> $_ladoDos = $l2;
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

</body>
</html>