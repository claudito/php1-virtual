<?php 

include'autoload.php';

var_dump(Usuario::lista());

echo "salto de linea";
echo "<br>";

/*
foreach (Usuario::lista() as $key => $value) {

    echo $value['nombres'].' '.$value['apellidos']."<br>";

}
*/


//$usuario = array('LUIS CLAUDIO', 'MARIA NAVARRO');
$usuario = array(

array('id'=>1,'nombres'=>'LUIS','apellidos'=>'CLAUDIO','dni'=>'46794282','fecha'=>'2018-02-18 10:26:43'),
array('id'=>2,'nombres'=>'JUAN','apellidos'=>'PEREZ','dni'=>'12345678','fecha'=>'2018-02-18 10:26:43')

) ;


var_dump($usuario);

 ?>