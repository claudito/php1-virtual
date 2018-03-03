<?php 
include'../../autoload.php'; 
$id  = $_GET['id'];



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Usuario</title>
</head>
<body>

<h1>Actualizar Usuario</h1>

<form action="../../controlador/usuario/actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $id; ?>">

	
<label>Nombres</label>
<input type="text" name="nombres" id="" required 
 value="<?php echo Usuario::consulta($id,'nombres'); ?>">

<br>

<label>Apellidos</label>
<input type="text" name="apellidos" id="" required
 value="<?php echo Usuario::consulta($id,'apellidos'); ?>">

<br>

<label>DNI</label>
<input type="text" name="dni" id="" required
 value="<?php echo Usuario::consulta($id,'dni'); ?>">

<br>

<button>Enviar</button>

</form>


	
</body>
</html>