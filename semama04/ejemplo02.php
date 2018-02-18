<?php 

//var_dump($_SERVER);

$data  =  "";
foreach ($_SERVER as $key => $value) {
	
  $data .=  $key.": ".$value."<br>";

}
/*
$data = "valor1";
$data .=  "valor2";
$data .=  "valor3";
*/
echo $data;


 ?>