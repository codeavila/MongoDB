<?php 
require dirname(dirname(__FILE__))."/modules/_MongoConector.php";

/**
* 
*/
class findAll{
	
	function __construct()
	{
		
	}

	function find_All()
	{
		$obj = new  _MongoDB();
		$collection = $obj->C_DB();
		try {
			$resultArray = $collection->find([]); 
			} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
				error_log ($e);
		}
			return $resultArray;
	}

	function find_One($idSH)
	{
		$obj = new  _MongoDB();
		$collection = $obj->C_DB();
		try {
			$resultArray = $collection->findOne(['_id' => new \MongoDB\BSON\ObjectID($idSH)]); 
			} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
				error_log ($e);
		}
			return $resultArray;
	}

}





