<?php 

require 'vendor/autoload.php';
try 

	{
$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";

$collection = (new MongoDB\Client($uri))->db_euab->Heroes;

$document = $collection->findOne(['grupo' => 'X-Men']);

var_dump($document['_id']);
var_dump($document['nombre']);
var_dump($document['mute']);
var_dump($document['grupo']);

}

catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
{
    echo "Error : ".$e;
}

?>