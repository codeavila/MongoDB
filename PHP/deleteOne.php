<?php 
require 'vendor/autoload.php';

try {
	
	$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
	$collection = (new MongoDB\Client($uri))->db_euab->Heroes;

	$deleteResult = $collection->deleteOne(['grupo' => 'X-Force']);

	printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	print_r($e);
}



