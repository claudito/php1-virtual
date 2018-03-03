<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Usuario</title>
</head>
<body>

<h1>Agregar Usuario</h1>

<form action="../../controlador/usuario/agregar.php" method="POST">
	
<label>Nombres</label>
<input type="text" name="nombres" id="" required>

<br>

<label>Apellidos</label>
<input type="text" name="apellidos" id="" required>

<br>

<label>DNI</label>
<input type="text" name="dni" id="" required>

<br>

<button>Enviar</button>

</form>


	
</body>
</html>