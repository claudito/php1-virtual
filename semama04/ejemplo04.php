<?php 

//$alumnos  = array("JUAN","MARIA","PEDRO",20,345.89,true);
//var_dump($alumnos);
/*
foreach ($alumnos as $key => $value) {
	
	echo $key.": ".$value."<br>";

}*/
/*
$alumnos  =  array("001"=>"JUAN","002"=>"PEDRO","003"=>"MARIA","004"=>"LISET");
//var_dump($alumnos);

$item = 0;

foreach ($alumnos as $key => $value) {
	
	$item = $item +1;

	echo $item." - ".$key." - ".$value."<br>";
}
*/

$alumnos  = array();

if (count($alumnos)>0)
{

foreach ($alumnos as $key => $value) {
	
	echo $value;
}

}
else
{
	echo "no hay registros disponibles";
}




 ?>