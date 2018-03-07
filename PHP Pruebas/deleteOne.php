<?php 
require 'vendor/autoload.php';
$_idSH = $_POST["_id"];
try {
	
	$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
	$collection = (new MongoDB\Client($uri))->db_euab->Heroes;

	$collection->deleteOne([ '_id' => new \MongoDB\BSON\ObjectID($_idSH)]);




	printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	print_r($e);
}



