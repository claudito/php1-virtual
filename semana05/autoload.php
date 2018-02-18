<?php 

include'config.php';

spl_autoload_register(function ($clase){

   $ruta =  "modelo/".$clase.".php";

   //echo $ruta;
   include($ruta);

});






 ?>