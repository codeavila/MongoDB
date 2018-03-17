
<?php
require 'vendor/autoload.php';

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";

$mongo = new MongoDB\Client($uri);

try 
{
	echo "Estoy Conectado";
}
catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e)
{
    echo "Error : ".$e;
}
?>
