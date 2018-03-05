<?php
require 'vendor/autoload.php';

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$mongoCliente = new MongoDB\Client($uri);


$db = "db_euab";
$coleccionNombre = "Heroes";

try 
{

$collection = $mongoCliente->$db->$coleccionNombre;

$doc = array(  'nombre' => 'Bruno Diaz', 'mute' => 'BatMan' , 'edad' => 35 ,'grupo' => 'Liga de la Justicia' );

$queryExecuted = $collection->insertOne( $doc );

    echo "Inserted with Object ID '{$queryExecuted->getInsertedId() }'";
}
catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
{
    echo "Error : ".$e;
}

?>