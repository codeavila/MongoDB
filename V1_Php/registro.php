<?php include 'head.php'; 
  
?>



<div class="container">
<h1>Registro de Super Heroes</h1>


<form action="CRUD/insert.php" method="post">
    Nombre <input type="text" name="nombre" id="nombre" /><br />
    Mute <input type="text" name="mute" id="mute"/><br />
    Edad  <input type="number" name="edad" id="edad"/><br />
    Grupo  <input type="text" name="grupo" id="grupo"/><br />
    <input class="btn" type="submit" name="submit" value="Registrar" />
</form>

</div>

<?php  include 'footer.php'; ?>	

