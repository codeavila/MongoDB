<?php 

require 'vendor/autoload.php';
require 'ConexionMongoDB.php';



function mostrarTodo(){

$obj = new  _MongoDB();
$collection = $obj->C_DB();

try {

	// $uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
	// $collection = (new MongoDB\Client($uri))->db_euab->Heroes;
	

	$resultArray = $collection->find([]); 

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	error_log ($e);
}




	return $resultArray;

}



