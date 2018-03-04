<?php 

include'../../autoload.php';


$id    =  $_POST['id'];


$data  =  Usuario::eliminar($id);

if ($data=='ok') 
{
  echo '
  <div class="alert alert-success">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	<strong>Registro Eliminado :D</strong>
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