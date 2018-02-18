<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo 02</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>


<body>

<h1>Formulario</h1>

<label>Nombres</label>
<input type="text" name="nombres" id="" placeholder="Ingrese sus nombres">

<br>

<label>Edad</label>
<input type="number" name="" id=""  min="18" max="65" >

<br>

<label>Fecha de Ingreso</label>
<input type="date" name="" id=""  value="2018-01-28"  
 min="2018-01-20"  max="2018-01-31">

<br>
<label >Hora de Ingreso</label>
<input type="time" name="" id="" value="14:00">

<br>

<label>Área</label>
<select name="" id="">
<option value="">Seleccionar el área</option>
<option value="1">Compras</option>
<option value="2">Sistemas</option>
<option value="3">Ventas</option>
<option value="4">RR. HH.</option>	
</select>

<br>
<label >Lenguajes de Programación</label>
<input type="checkbox"  value="1"  name="php"    id="">PHP
<input type="checkbox"  value="2"  name="python" id="">PYTHON
<input type="checkbox"  value="3"  name="c++"    id="">C++
<input type="checkbox"  value="4"  name="java"   id="">JAVA
<br>
<label >Estado Civil</label>
<input type="radio" name="estadocivil" value="1"    id="">SOLTERO
<input type="radio" name="estadocivil" value="2"     id="">CASADO
<input type="radio" name="estadocivil" value="3"     id="">VIUDO
<input type="radio" name="estadocivil" value="4"    id="">DIVORCIADO

<br>
<label>Comentario</label>
<textarea name="comentario" id="" cols="60" rows="3"></textarea>

<br>
<label>Subir Archivo</label>
<input type="file" name="" id="">



</body>
</html>