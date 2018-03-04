<?php 

include'../../autoload.php';


$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$dni        =  $_POST['dni'];


$data  =  Usuario::agregar($nombres,$apellidos,$dni);

if ($data=='ok') 
{
  echo '
  <div class="alert alert-success">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	<strong>Registro Agregado :D</strong>
  </div>';
} 
else
{
  echo '<div class="alert alert-danger">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	<strong>Error:Consulte al área de Sistemas :C</strong>
  </div>';
}




 ?>