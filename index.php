<?php include 'Php/head.php'; 
  include 'Php/mostrarTodo.php';
?>

<div class="container">
<h1>Lista de Super Heroes Registrados <a href="Php/registro.php"><button class="btn">Registro Nuevo</button></a></h1>
<div class="row">
	
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
              <form action="Php/Vista_UPDATE.php" method="post">
                <input type="hidden" name="_id" id="_id" value= <?php echo $doc['_id'];?> >
                <input type="hidden" name="nombre" id="nombre" value= <?php echo  $doc['nombre'];?> >
                <input type="hidden" name="mute" id="mute" value= <?php echo $doc['mute'];?> >
                <input type="hidden" name="edad" id="edad" value= <?php echo $doc['edad'];?> >
                <input type="hidden" name="grupo" id="grupo" value= <?php echo $doc['grupo'];?> >
                <input class="btn" type="submit" name="submit" value="Actualizar">
              </form>
            </td>
            <td>
          <form action="Php/CRUD/delete.php" method="post">
                <input type="hidden" name="_id" id="_id" value= <?php echo $doc['_id'];?> >
                <input class="btn" type="submit" name="submit" value="Eliminar">
              </form>

            </td>
          </tr>

<?php } ?>

        </tbody>
      </table>
</div>
<?php  include 'Php/footer.php'; ?>	

