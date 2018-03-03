<?php 

include'../../autoload.php';


$id    =  $_GET['id'];

$data  =  Usuario::eliminar($id);

if ($data=='ok') 
{
  header('Location: ../../pages/usuario');
} 
else
{
  echo "error";
}

 ?>