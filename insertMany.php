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
				
				array( 'nombre' => 'Diana', 'mute' => 'Mujer Maravilla' , 'edad' => 300 ,'grupo' => 'Liga de la Justicia'  ),
				array( 'nombre' => 'Barry Allen', 'mute' => 'Flash' , 'edad' => 30,'grupo' => 'Liga de la Justicia'  ),
				array( 'nombre' => 'Hal Jordan', 'mute' => 'Linterna Verde' , 'edad' => 32,'grupo' => 'Liga de la Justicia'  ),

				array( 'nombre' => 'Charles Xavier', 'mute' => 'Profesor X' , 'edad' => 42,'grupo' => 'X-Men'  ),
				array( 'nombre' => 'Scott Summers', 'mute' => 'Ciclope' , 'edad' => 30,'grupo' => 'X-Men'  )
			);

$queryExecuted = $collection->insertMany( $docs );


}
catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
{
    echo "Error : ".$e;
}

?>