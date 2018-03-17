<?php 

require '../vendor/autoload.php';

$nombreSH = $_POST["nombre"];
$muteSH = $_POST["mute"];
$edadSH = $_POST["edad"];
$grupo = $_POST["grupo"];

/**
* 
*/
	
try {

 	$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
 	$collection = (new MongoDB\Client($uri))->db_euab->Heroes;
	
	$doc = array(  'nombre' => $nombreSH, 'mute' => $muteSH , 'edad' => $edadSH ,'grupo' => $grupo );
	 	 

	$executed = $collection->insertOne( $doc );


	//echo "Datos Insertados";
	
	header ("Location: http://127.0.0.1:8000");


 	} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	
 	echo $e;
 }





 




