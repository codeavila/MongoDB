<?php 

require 'vendor/autoload.php';

function mostrarTodo(){


try {

	$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
	$collection = (new MongoDB\Client($uri))->db_euab->Heroes;
	$resultArray = $collection->find([]); 

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	echo $e;
}




	return $resultArray;

}



