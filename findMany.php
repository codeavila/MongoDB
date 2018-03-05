<?php  
require 'vendor/autoload.php';

try {

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$collection = (new MongoDB\Client($uri))->db_euab->Heroes;

$resultArray = $collection->find(['grupo' => 'Liga de la Justicia']); 

foreach ($resultArray as $doc) {
	// echo "\n Nombre: ".$doc['nombre'];
	// echo "Mute: ".$doc['mute'];
	// echo "Grupo: ".$doc['grupo']. "\n";
	
	// var_dump($doc['nombre']);
	// var_dump($doc['mute']);
	// var_dump($doc['grupo']);
	
	echo '<pre>';
	print_r("Nombre: ".$doc['nombre']."\n Mute: ".$doc['mute']."\n Grupo: ".$doc['grupo']."\n");
	echo  '</pre>';
}


} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	echo $e;
}
