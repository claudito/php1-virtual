
//inicio funcion loadtable
function loadTable()
{

//var parametros = {"fecha":"2018-03-04",tipo:"ajax"};

$("#loader").fadeIn('Slow');

$.ajax({

url : "../modal/usuario/listar.php",
//data: parametros,
beforeSend:function(objeto)//evento mientras la data esta siendo cargada
{
	 //alert(objeto);
     //console.log(objeto);
  $("#loader").html('<img src="../img/loader.gif" alt="" />');
},
success:function(data)
{
   $("#data").html(data);
   $("#loader").html('');

}
});

}
//fin funcion loadtable


//función agregar

$("#agregar").submit(function (event){

var parametros = $(this).serialize();

$.ajax({

url : "../controlador/usuario/agregar.php",
type:"POST",
data:parametros,
beforeSend:function(objeto){

$("#mensaje").html('cargando...');

},
success:function(data){

$("#mensaje").html(data);
loadTable();
//$("#agregar")[0].reset();//resetear inputs
$("#modal-agregar").modal('hide');//ocultar modal

}


});



event.preventDefault();
});



//función capturar elemento data del boton eliminar

$("#modal-eliminar").on('show.bs.modal',function(event){

var button = $(event.relatedTarget) // Botón que activo el modal
var id     = button.data('id');
var nombres = button.data('nombres');
var modal  = $(this);

modal.find("#id").val(id);
modal.find("#nombres").val(nombres);


});


//función eliminar

$("#eliminar").submit(function (event){

var parametros = $(this).serialize();

$.ajax({

url : "../controlador/usuario/eliminar.php",
type:"POST",
data:parametros,
beforeSend:function(objeto){

$("#mensaje").html('cargando...');

},
success:function(data){

$("#mensaje").html(data);
loadTable();
//$("#agregar")[0].reset();//resetear inputs
$("#modal-eliminar").modal('hide');//ocultar modal

}


});

event.preventDefault();
});