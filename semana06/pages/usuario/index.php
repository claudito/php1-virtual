<?php include'../../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuario</title>
</head>
<body>

<a href="agregar.php">Agregar Usuario</a>

<?php if (  count(Usuario::lista()) >0): ?>
 <table>
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
<a href="actualizar.php?id=<?php echo $value['id'] ?>">Actualizar</a>
<a href="../../controlador/usuario/eliminar.php?id=<?php echo $value['id'] ?>"  onclick="return confirm('¿Estas seguro?');">Eliminar</a>
</td>
</tr>
<?php endforeach ?>
</tbody>


</table>

<?php else: ?>
<p>No existe registros disponibles.</p>	
<?php endif ?>


	
</body>
</html>