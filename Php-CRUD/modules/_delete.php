<?php  
require dirname(dirname(__FILE__))."/modules/_MongoConector.php";
/**
* 
*/

if (isset($_POST['submit'])) {
	
		$idSH = $_POST["_id"];
		$obj = new  _MongoDB();
		$collection = $obj->C_DB();
		try {

			$updateResult = $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectID($idSH)]);
			header ("Location: http://127.0.0.1:8000");
		} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
			error_log ($e);
		}

}