<?php 
	require dirname(dirname(__FILE__))."/structure/head.php";
	require dirname(dirname(__FILE__))."/modules/_find.php";
?>
<div class="container">
	<div class="row">
		<div class="col l6">
			<form action="../modules/_insert.php" method="post">
				    Nombre <input type="text" name="nombre" id="nombre">
				    Mute <input type="text" name="mute" id="mute">
				    Edad  <input type="number" name="edad" id="edad"> 
				    Grupo  <input type="text" name="grupo" id="grupo">
				    <input class="btn" type="submit" name="submit" value = "Guardar" />
			</form>
		</div>	
	</div>
</div>

<?php 
	require dirname(dirname(__FILE__))."/structure/footer.php";
 ?>