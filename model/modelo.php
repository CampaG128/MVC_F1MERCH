<?php
class Platillo
{
	private $platillo;
	private $dbh;

	public function __construct()
	{
		$this->platillo = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_f1merch', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_platillos()
	{
		self::set_names();
		$sql="select id_envio, id_producto, direccion_envio, pais_envio, envio_coste, total, paqueteria, nombre_cuenta from envio";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->platillo[]=$res;
		}
		return $this->platillo;
		$this->dbh=null;
	}
}
?>