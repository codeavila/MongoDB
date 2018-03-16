<?php 
	require dirname(dirname(__FILE__))."/structure/head.php";
	require dirname(dirname(__FILE__))."/modules/_find.php";
	
	$idSH = $_POST["_id"];	
	$obj = new  findAll();
	$collection = $obj->find_One($idSH);

	var_dump($idSH);

 ?>

<div class="container">
	<div class="row">
		<h1>Actualizar de Super Heroes</h1>
			<div class="col l6">
				<form action="CRUD/update.php" method="post">
					
					<?php foreach ($collection as $doc) { ?>	
					
						_ID <input class="disable" type="text" name="_id" id="_id" value=  >
				    	Nombre <input type="text" name="nombre" id="nombre" value= <?php $doc['nombre']; ?> >
				    	Mute <input type="text" name="mute" id="mute" value= <?php $doc['mute']; ?>  >
				    	Edad  <input type="number" name="edad" id="edad" value= <?php $doc['edad']; ?> > 
				    	Grupo  <input type="text" name="grupo" id="grupo" value= <?php $doc['grupo']; ?> >
				    
				    <input class="btn" type="submit" name="submit" value="Actualizar" />
				    <?php } ?>
				</form>
		</div>
	</div>
</div>

<?php 
	require dirname(dirname(__FILE__))."/structure/footer.php";
 ?>