<?php 

include'autoload.php';


$usuario  = array(
array('id'=>1,'nombres'=>'luis'),
array('id'=>2,'nombres'=>'diana'),
array('id'=>3,'nombres'=>'diana'),
);

if ( count($usuario)>0) 
{
	echo "existe datos";
} 
else
 {
	echo "no existe datos";
}




 ?>