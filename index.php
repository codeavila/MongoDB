<?php include 'Php/head.php'; 
  include 'Php/mostrarTodo.php';
?>

<h1>Lista de Super Heroes Registrados</h1>

<div class="container">
<div class="row">

	
	<form class="col s12">
         <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"></label>
          <i class="material-icons">close</i>
          <div class="btn" type="sumbit">Buscar</div>
        </div>
    </form>


</div>
	<table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Mute</th>
              <th>Edad</th>
              <th>Grupo</th>
          </tr>
        </thead>

        <tbody>
<?php 
foreach (mostrarTodo() as $doc) {	
?>	
          <tr>
          	<td>
            	<?php  
            	echo $doc['_id'];
            	?>
            </td>
            <td>
            	<?php  
            	echo $doc['nombre'];
            	?>
            </td>
            <td>
            	<?php  
            	echo $doc['mute'];
            	?>
            </td>
            <td>
            	<?php  
            	echo $doc['edad'];
            	?>
            </td>
            <td>
            	<?php  
            	echo $doc['grupo'];
            	?>
            </td>
            <td>
              <form action="CRUD/update.php">
            	 <input type="hidden" name="id" id="id" value=
                <?php  
                  echo $doc['_id'];
                ?> >
                <input class="btn" type="submit" name="submit" value="Actualizar" />
              </form>
            </td>
            <td>
            	<a href="#"><button class="btn">Eliminar</button></a>
            </td>
          </tr>

<?php } ?>

        </tbody>
      </table>
</div>
<?php  include 'Php/footer.php'; ?>	

