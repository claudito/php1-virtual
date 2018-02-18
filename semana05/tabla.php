<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tabla HTML</title>
</head>
<body>
	
<table>
<thead>
<tr>
<th>id</th>
<th>nombres</th>
<th>apellidos</th>
<th>dni</th>
<th>fecha de creación</th>
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
</tr>
<?php endforeach ?>
</tbody>


</table>






</body>
</html>