<?php 

require 'vendor/autoload.php';

/**
* Conector MongoDB PHP
*/

class _MongoDB 
{
	

	function Conector()
	{
		try {
		$db = "db_euab";
		$collection = "Heroes";
		$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/".$db;
		$collection = (new MongoDB\Client($uri))->$db->$collection;

		echo "Se establecio la conexion a la Base de Datos ".$db." y se utiliza la Coleccion ".$collection;

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}