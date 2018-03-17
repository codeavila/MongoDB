<?php  

require '../vendor/autoload.php';

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$collection = (new MongoDB\Client($uri))->db_euab->Heroes;

try{

$_idSH = $_POST["_id"];

$deleteResult = $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectID($_idSH)]);



header ("Location: http://127.0.0.1:8000");

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	
 	echo $e;
 }