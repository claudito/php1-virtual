<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuario</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Css bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php 

include'../modal/usuario/agregar.php';//modal agregar
include'../modal/usuario/eliminar.php';//modal eliminar

 ?>



<div class="container-fluid"><!-- contenedor -->
	
<div class="row"> <!-- fila -->
	
<div class="col-md-12">


<div id="mensaje"></div><!-- mensaje de las funciones agregar,eliminar,actualizar -->



<div class="pull-right">
<button class="btn btn-primary" data-toggle="modal" href="#modal-agregar"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
</div>

<div id="loader" class="text-center"></div> <!-- Gif amimando de carga -->
<div id="data"></div>   <!-- Se cargarian los datos de la tabla-->

</div>



</div>




</div>



<script src="../ajax/usuario.js"></script>
<script>loadTable()</script>
</body>
</html>