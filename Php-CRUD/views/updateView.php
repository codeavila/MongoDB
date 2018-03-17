<?php 
	require dirname(dirname(__FILE__))."/structure/head.php";
	require dirname(dirname(__FILE__))."/modules/_find.php";
?>
<div class="container">
	<div class="row">
		<!-- <div class="col l6">
			<?php
			$_id = $_POST['_id'];
			 $obj = new  findAll();
			 $collection = $obj->find_One($_id); 
			  foreach ($collection as $doc) { 
			  echo $doc['_id']."<br>"; 
			  echo $doc['nombre']."<br>"; 
			  echo $doc['mute']."<br>";
			  echo $doc['edad']."<br>";
			  echo $doc['grupo']."<br>"; 
			}
			  ?>
		</div> -->

		<div class="col l6">

<form action="../modules/_update.php" method="post">

	<?php 
		if (isset($_POST['submit'])) {
		
			 $_id = $_POST['_id'];
			 $obj = new  findAll();
			 $collection = $obj->find_One($_id); 
	
	foreach ($collection as $doc) { 
		 
	?>
		_ID <input disabled class="disable" type="text" name="_id" id="_id" value= "<?php echo ($doc['_id']); ?> ">
	    Nombre <input type="text" name="nombre" id="nombre" value =" <?php echo $doc['nombre'];?> ">
	    Mute <input type="text" name="mute" id="mute" value = " <?php echo $doc['mute']; ?> " >
	    Edad  <input type="number" name="edad" id="edad" value = " <?php echo $doc['edad']; ?> "> 
	    Grupo  <input type="text" name="grupo" id="grupo" value = " <?php echo $doc['grupo']; ?>  ">
	    <input class="btn" type="submit" name="submit" value = "Actualizar" />

	<?php } 
		}
	?>

</form>
		</div>	
	</div>
</div>

<?php 
	require dirname(dirname(__FILE__))."/structure/footer.php";
 ?>