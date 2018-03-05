<?php
require 'vendor/autoload.php';

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$mongoCliente = new MongoDB\Client($uri);


$db = "db_euab";
$coleccionNombre = "Heroes";

try 
{

$collection = $mongoCliente->$db->$coleccionNombre;

$docs = array(
				array( 'nombre' => 'Diana', 'mute' => 'Mujer Maravilla' , 'edad' => 300  ),
				array( 'nombre' => 'Barry Allen', 'mute' => 'Flash' , 'edad' => 30  ),
				array( 'nombre' => 'Hal Jordan', 'mute' => 'Linterna Verde' , 'edad' => 32  )
			);

$queryExecuted = $collection->insertMany( $docs );

    echo "Datos Insertados con Exito";

}
catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
{
    echo "Error : ".$e;
}

?>