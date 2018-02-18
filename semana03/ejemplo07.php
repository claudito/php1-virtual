<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo 07</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Css bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid"><!-- contenedor -->
	
<div class="row"> <!-- fila -->
	
<div class="col-md-3">

</div>


<div class="col-md-6">

<h1>ToolTip</h1>


<button  type="button" data-toggle="tooltip"  data-placement="left" class="btn btn-default" title="izquierda">izquierda</button>

<button  type="button" data-toggle="tooltip"  data-placement="top" class="btn btn-warning" title="arriba">arriba</button>

<button  type="button" data-toggle="tooltip"  data-placement="bottom" class="btn btn-danger" title="abajo">abajo</button>

<button  type="button" data-toggle="tooltip"  data-placement="right" class="btn btn-primary" title="derecha">derecha</button>


</div>




</div>





</div>



<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>