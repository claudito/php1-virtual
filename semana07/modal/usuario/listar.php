<?php 

include'../../autoload.php';

 ?>

<?php if (  count(Usuario::lista()) >0): ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Usuarios</h3>
	</div>
	<div class="panel-body">

<table class="table">
<thead>
<tr>
<th>id</th>
<th>nombres</th>
<th>apellidos</th>
<th>dni</th>
<th>fecha de creación</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
<?php foreach (Usuario::lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id'] ?></td>
<td><?php echo $value['nombres'] ?></td>
<td><?php echo $value['apellidos'] ?></td>
<td><?php echo $value['dni'] ?></td>
<td><?php echo $value['fecha_creacion'] ?></td>
<td>
<button class="btn btn-danger" data-toggle="modal"  data-target="#modal-eliminar" data-id="<?php echo $value['id'] ?>" data-nombres="<?php echo $value['nombres'] ?>" ><i class="glyphicon glyphicon-trash"></i></button>

</td>
</tr>
<?php endforeach ?>
</tbody>
</table>

</div>
</div>

<?php else: ?>
<p class="alert alert-warning">No existen registros disponibles.</p>	
<?php endif ?>
