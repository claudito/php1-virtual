<?php 

#1 fecha
/*
//date_default_timezone_get();
date_default_timezone_set('America/Lima');
echo date('d-m-Y');
echo "<br>";
echo date('H:i:s');
*/

#2
/*
$fecha  = "2018-02-10 10:34:12";
echo date_format(date_create($fecha),'d/m/Y H:i');
*/

#3
/*
$nombres = "Luis Claudio";
//echo strlen($nombres);
if (strlen($nombres)>0)
{
 echo "variable llena";
}
else
{
 echo "variable vacia";
}*/

#4
/*
$nombres = "";
//echo strlen($nombres);
if (empty($nombres))
{
 echo "variable vacia";
}
else
{
 echo "variable llena";
}
*/

#5
/*
$nombres = "                      ";
echo strlen($nombres);
if (strlen(trim($nombres))>0)
{
 echo "variable llena";
}
else
{
 echo "variable vacia";
}
*/

#6
$fecha  = "2018-02-11";

echo substr($fecha, 0,4);
echo "<br>";
echo substr($fecha, 5,2);
echo "<br>";
echo substr($fecha, 8,2);
echo "<br>";
echo substr($fecha,-2);
echo "<br>";
echo substr($fecha,-3,2);

 ?>