<?php 

require dirname(dirname(__FILE__))."/modules/_MongoConector.php";
		

		$nombreSH = $_POST["nombre"];
		$muteSH = $_POST["mute"];
		$edadSH = $_POST["edad"];
		$grupo = $_POST["grupo"];

		$obj = new  _MongoDB();
		$collection = $obj->C_DB();
/**
* 
*/
	
try {

	$doc = array(  'nombre' => $nombreSH, 'mute' => $muteSH , 'edad' => $edadSH ,'grupo' => $grupo ); 	
	$insert = $collection->insertOne( $doc );
	
	header ("Location: http://127.0.0.1:8000");

 	} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	
 	echo $e;
 }

  ?>