<?php
require_once "conexion.php";
require_once "producto.php";
require_once "usuario.php";

class Data
{
	private $con;

	public function __construct()
	{
		$this-> con = new conexion("localhost","carniceriasprint1","root","");
	}

	public function getProductos()
	{
		$productos = array();
		$query = "select * from producto";
		$res = $this->con-> ejecutar($query);

		while($reg = mysql_fetch_array($res))
		{

			$p = new producto();
			$p-> cod_producto = $reg[0];
			$p-> categoria = $reg[1];
			$p-> descripcion = $reg[2];
			$p-> nombre = $reg[3];
			$p-> precio_producto = $reg[4];
			$p-> precio_venta = $reg[5];
			$p-> imagen = $reg[6];

						

			array_push($productos, $p);
		}

		return $productos;
	}



}

?>