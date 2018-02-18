<?php 
/*
$_GET[]
$_POST[]
$_REQUEST[]
$_FILES   =  manejo exclusivo de archivos
*/

//echo $_FILES['archivo'];

//var_dump($_FILES['archivo']);
/*
foreach ($_FILES['archivo'] as $key => $value) 
{

   echo $key.": ".$value."<br>";

}

echo $_FILES['archivo']['name'];
echo "<br>";
echo $_FILES['archivo']['tmp_name'];
*/

$filename    = $_FILES['archivo']['tmp_name'];
$destination = 'files/'.$_FILES['archivo']['name'];

if (move_uploaded_file($filename,$destination))
{
   echo "archivo subido correctamente";
} 
else 
{
   echo "error al subir el archivo";
}




 ?>