<?php include 'Php/head.php'; 
  include 'Php/mostrarTodo.php';
?>

<h1>Lista de Super Heroes Registrados</h1>

	<table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Mute</th>
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
            	echo $doc['grupo'];
            	?>
            </td>
            <td>
            	<a href="#"><button class="btn">Actualizar</button></a>
            </td>
            <td>
            	<a href="#"><button class="btn">Eliminar</button></a>
            </td>
          </tr>

<?php } ?>

        </tbody>
      </table>

<?php  include 'Php/footer.php'; ?>	

