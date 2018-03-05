<?php 
require 'vendor/autoload.php';

try {

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$collection = (new MongoDB\Client($uri))->db_euab->Heroes;


$result = $collection->updateOne(
    ['mute' => 'BatMan'],
    ['$set' => ['grupo' => "Dark League"]]
);

printf("Matched %d document(s)\n", $result->getMatchedCount());
printf("Modified %d document(s)\n", $result->getModifiedCount());

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {

	echo $e;
	
}
