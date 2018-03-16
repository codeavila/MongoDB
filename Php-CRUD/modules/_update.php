<?php  
require '_MongoConector.php';

/**
* 
*/
class updateClass
{
	$idSH = $_POST["_id"];
	$nombreSH = $_POST["nombre"];
	$muteSH = $_POST["mute"];
	$edadSH = $_POST["edad"];
	$grupoSH = $_POST["grupo"];
	
	function __construct()
	{
		# code...
	}

	function updateMethod(){

		$obj = new  _MongoDB();
		$collection = $obj->C_DB();
		
		try {

			$updateResult = $collection->updateOne([ '_id' => new \MongoDB\BSON\ObjectID($idSH)],
    											   [ '$set' => [ 'nombre' => $nombreSH ,'mute' => $muteSH , 'edad' => $edadSH , 'grupo' => $grupoSH  ]] 
    											);
			header ("Location: http://127.0.0.1:8000");
		} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
			error_log ($e);
		}
	}
}