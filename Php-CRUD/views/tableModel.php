<?php  
require dirname(dirname(__FILE__))."/modules/_find.php";
	$obj = new  findAll();
	$collection = $obj->find_All();
?>

<div class="container">
	<h1>Lista de Super Heroes Registrados <a href="Php/registro.php"><button class="btn">Registro Nuevo</button></a></h1>
<div class="row">
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
foreach ($collection as $doc) {	
?>	
          <tr>
          	<td>
            	<?php echo $doc['_id']; ?>
            </td>
            <td>
            	<?php echo $doc['nombre']; ?>
            </td>
            <td>
            	<?php echo $doc['mute']; ?>
            </td>
            <td>
				<?php echo $doc['edad']; ?>
            </td>
            <td>
            	<?php echo $doc['grupo']; ?>
            </td>
            <td>
              	<form action="views/updateView.php" method="post">
	                <input type="" name="_id" id="_id" value= <?php echo $doc['_id'];?> >
	                <input class="btn" type="submit" name="submit" value="Actualizar">
	             </form>
            </td>
            <td>
		          <form action="modules/_delete.php" method="post">
		                <input type="hidden" name="_id" id="_id" value= <?php echo $doc['_id'];?> >
		                <input class="btn" type="submit" name="submit" value="Eliminar">
		          </form>
            </td>
          </tr>

<?php } ?>

        </tbody>
      </table>
</div>



