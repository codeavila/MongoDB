<?php  

require 'vendor/autoload.php';

$_idSH = $_POST["_id"];
$nombreSH = $_POST["nombre"];
$muteSH = $_POST["mute"];
$edadSH = $_POST["edad"];
$grupoSH = $_POST["grupo"];

?>


<?php include 'head.php'; ?>
<div class="container">
<h1>Registro de Super Heroes</h1>


<form action="CRUD/update.php" method="post">
	_ID <input class="disable" type="text" name="_id" id="_id" value= <?php echo $_idSH; ?> >
    Nombre <input type="text" name="nombre" id="nombre" value=<?php echo $nombreSH; ?> >
    Mute <input type="text" name="mute" id="mute" value=<?php echo $muteSH; ?>  >
    Edad  <input type="number" name="edad" id="edad" value=<?php echo $edadSH; ?> > 
    Grupo  <input type="text" name="grupo" id="grupo" value=<?php echo $grupoSH; ?> >
    <input class="btn" type="submit" name="submit" value="Actualizar" />
</form>

</div>

<?php  include 'footer.php'; ?>	