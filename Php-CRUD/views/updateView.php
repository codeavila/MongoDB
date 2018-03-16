<?php 
require dirname(dirname(__FILE__))."/structure/head.php";
require dirname(dirname(__FILE__))."/modules/_find.php";
 ?>

<div class="container">
	<div class="row">
		<h1>Actualizar de Super Heroes</h1>
			<div class="col l6">
				<form action="CRUD/update.php" method="post">
					_ID <input class="disable" type="text" name="_id" id="_id" value= <?php  ?> >
				    Nombre <input type="text" name="nombre" id="nombre" value=<?php  ?> >
				    Mute <input type="text" name="mute" id="mute" value=<?php  ?>  >
				    Edad  <input type="number" name="edad" id="edad" value=<?php  ?> > 
				    Grupo  <input type="text" name="grupo" id="grupo" value=<?php ?> >
				    <input class="btn" type="submit" name="submit" value="Actualizar" />
				</form>
		</div>
	</div>
</div>
<?php 
	require '../structure/footer.php';
 ?>