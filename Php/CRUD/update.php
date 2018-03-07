<?php  

require '../vendor/autoload.php';

try {

//$_idSH = "ObjectId('".$_POST["_id"]."')";
$_idSH = $_POST["_id"];
$nombreSH = $_POST["nombre"];
$muteSH = $_POST["mute"];
$edadSH = $_POST["edad"];
$grupoSH = $_POST["grupo"];

print_r($_POST);

$uri = "mongodb://euab:admincirex@ds253468.mlab.com:53468/db_euab";
$collection = (new MongoDB\Client($uri))->db_euab->Heroes;


// $document = array(
//     '_id' => new MongoId('5052f343381ef8bc10000011'),
//     'first_name' => 'Tadataka',
//     'middle_name' => '',
//     'last_name' => 'Yamada',
//     'title' => 'Independent Director',
//     'company_id' => new MongoId('50072714b4a6deba100051d3')
// );

// $c->update(
//     array('_id' => $_idSH),
//     array('$set' => array('name' => $nombreSH, 
//     	  'mute' => $muteSH ,
//     	  'edad' => $edadSH ,
//     	  'grupo' => $grupoSH 
//     		)
// );
//$collection->updateOne(['_id' => new \MongoDB\BSON\ObjectID($_idSH)], ['$set' => ['some_property' => 'some_value']]);   


// $updateResult = $collection->updateOne(
// 						['_id' => new \MongoDB\BSON\ObjectID($_idSH)], 
// 					    ['$set' => ['nombre' => $nombreSH), 
//     	  				  		   'mute' => $muteSH ,
//     	  						   'edad' => $edadSH ,
//     	  						   'grupo' => $grupoSH 
//     	  						   ]
//     	  				]
//     	  			);   

$updateResult = $collection->updateOne(
    [ '_id' => new \MongoDB\BSON\ObjectID($_idSH)],
    [ '$set' => [ 'nombre' => $nombreSH ,'mute' => $muteSH , 'edad' => $edadSH , 'grupo' => $grupoSH  ]]
);



// $updateResult = $collection->update(
//     array('name' => $nombreSH),
//     array('$set' => array('name' => $nombreSH), 
//     	  'mute' => $muteSH ,
//     	  'edad' => $edadSH ,
//     	  'grupo' => $grupoSH 
//     		)
// );

//print_r($updateResult);

header ("Location: http://127.0.0.1:8000");

} catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
	
 	echo $e;
 }



