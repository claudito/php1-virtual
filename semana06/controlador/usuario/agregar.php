<?php 

include'../../autoload.php';


$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$dni        =  $_POST['dni'];

$data  =  Usuario::agregar($nombres,$apellidos,$dni);

if ($data=='ok') 
{
  header('Location: ../../pages/usuario');
} 
else
{
  echo "error";
}




 ?>