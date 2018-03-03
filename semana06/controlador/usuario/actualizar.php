<?php 

include'../../autoload.php';

$id         =  $_POST['id'];
$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$dni        =  $_POST['dni'];

$data  =  Usuario::actualizar($id,$nombres,$apellidos,$dni);

if ($data=='ok') 
{
  header('Location: ../../pages/usuario');
} 
else
{
  echo "error";
}




 ?>