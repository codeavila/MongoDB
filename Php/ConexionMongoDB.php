<?php 

require 'vendor/autoload.php';

/**
* Conector MongoDB PHP
*/

 class _MongoDB 
 {
  function C_DB()
 	{
 		 try {
 		 $db = "db_euab";
 		 $collection = "Heroes";
 		 $uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/".$db;
 		 return $collection = (new MongoDB\Client($uri))->$db->$collection;
 			//var_dump("Se establecio la conexion a la Base de Datos ".$db." y se utiliza la Coleccion ".$collection);
 		 } catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
 		 	error_log($e);
 		 }
 	}
 }
 $obj = new  _MongoDB();
 $obj->C_DB();
?>