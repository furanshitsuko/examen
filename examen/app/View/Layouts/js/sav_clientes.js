// JavaScript Document
var modulo = "sav_clientes";
var ruta_control = "../../controlador/" + modulo;
var ruta_vista   = "../../vista/" + modulo;

$(document).ready(function(){	
	$("#formulario").hide();
	$("#informacion").hide();
	ConsultarDatos();

	$("#boton_agregar").click(function(){
		$("#listado").hide();
		$("#boton_agregar").hide();
		$.ajax({
			url: ruta_vista + '/formulario_nuevo.php',
			cache: false,
			type: "GET",
			beforeSend: function(objeto){
				$("#informacion").show();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Formulario, favor espere un momento</h2></div>");
			},
			success: function(datos){
				$("#informacion").hide();
				$("#formulario").fadeIn('slow');
				$("#formulario").html(datos);
				$("#configuracion").hide();
			}
		});
	});

});

function PaginaSig(pagina){
	var numero_paginas = $('#numero_paginas').attr('value');
	var aux_pagina = parseInt (pagina) + parseInt (numero_paginas);
	
	$.ajax({
		url: ruta_control + '/consulta_lista.php',
		cache: false,
		type: "POST",
		data: "submit=&pagina=" + aux_pagina + "&numero_paginas=" + numero_paginas,
		beforeSend: function(objeto){
		$("#informacion").show();
		$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");},
		success: function(datos){
		$("#informacion").hide();
		$("#listado").html(datos);
		}
	});

}

function PaginaAnt(pagina){
	var numero_paginas = $('#numero_paginas').attr('value');
	var aux_pagina = parseInt (pagina) - parseInt (numero_paginas);
	
	$.ajax({
		url: ruta_control + '/consulta_lista.php',
		cache: false,
		type: "POST",
		data: "submit=&pagina=" + aux_pagina + "&numero_paginas=" + numero_paginas,
		beforeSend: function(objeto){
		$("#informacion").show();
		$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");},
		success: function(datos){
		$("#informacion").hide();
		$("#listado").html(datos);
		}
	});

}


function ConsultarDatos(){
	var pagina = $('#pagina').attr('value');
	if( !isNaN(pagina)||(pagina == null) ||(pagina == 'undefined') ){ pagina = '0'; }
	$.ajax({
		url: ruta_control + '/consulta_lista.php',
		cache: false,
		type: "POST",
		data: "submit=&pagina=" + pagina  + "&numero_paginas=10",
		beforeSend: function(objeto){
			$("#informacion").show();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			//$("#informacion").hide();
			$("#configuracion").show();
			$("#listado").html(datos);
		}
	});
}

function GrabarDatos(){
	//Rescato los datos

        var datos = "submit=";	
	datos += "&sap_cliente="             + $('#sap_cliente').attr('value'); ;
	datos += "&descrip_cliente_final="   + $('#descrip_cliente_final').attr('value'); ;
	datos += "&comuna="                  + $('#comuna').attr('value'); ;
	datos += "&ciudad="                  + $('#ciudad').attr('value'); ;
	datos += "&region="                  + $('#region').attr('value'); ;
	datos += "&zona_geografica="         + $('#zona_geografica').attr('value'); ;
	datos += "&descripcion_grp_cliente=" + $('#descripcion_grp_cliente').attr('value'); ;
	datos += "&tipo_empresa="            + $('#tipo_empresa').attr('value'); ;
	datos += "&condicion_empresa="       + $('#condicion_empresa').attr('value'); ;
	
	$.ajax({
          url: ruta_control + '/grabar.php',
          type: "POST",
		  data: "submit=" + datos,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").show();
			$("#boton_agregar").show();
			$("#informacion").show();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Eliminando Datos, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			$("#informacion").hide();
			alert (datos);
			ConsultarDatos();
		}
	});
	
	return false;
}



function EliminarDatos(id){
	ret = confirm ("Esta seguro de eliminar el dato?");
	if (!ret) return false; 
	$.ajax({
		url: ruta_control + '/eliminar.php',
		type: "POST",
		data: "submit=&id=" + id,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").show();
			$("#boton_agregar").show();
			$("#informacion").show();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Eliminando Datos, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			$("#informacion").hide();
			alert (datos);
			ConsultarDatos();
		}
	});
	return false;
}

function ModificarDatos(id){ 
	$.ajax({
		url: ruta_vista + '/formulario_modificar.php',
		type: "POST",
		data: "submit=&id=" + id,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").show();
			$("#boton_agregar").hide();
			$("#informacion").show();
			$("#configuracion").hide();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Cargando Formulario, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			$("#informacion").hide();
			$("#boton_agregar").hide();
			$("#listado").hide();
			$('#formulario').html(datos);
			$("#formulario").fadeIn('slow');
			
		}
	});
	return false;
}

function GrabarModificarDatos(){ 
        var datos = "submit=";
        datos += "&idsav_clientes="          +  $('#idsav_clientes').attr('value');
        datos += "&sap_cliente="             +  $('#sap_cliente').attr('value');
        datos += "&descrip_cliente_final="   +  $('#descrip_cliente_final').attr('value');
        datos += "&comuna="                  +  $('#comuna').attr('value');
        datos += "&ciudad="                  +  $('#ciudad').attr('value');
        datos += "&region="                  +  $('#region').attr('value');
        datos += "&zona_geografica="         +  $('#zona_geografica').attr('value');
        datos += "&descripcion_grp_cliente=" +  $('#descripcion_grp_cliente').attr('value');
        datos += "&tipo_empresa="            +  $('#tipo_empresa').attr('value');
        datos += "&condicion_empresa="       +  $('#condicion_empresa').attr('value');
	$.ajax({
		url: ruta_control + '/modificar.php',
		type: "POST",
		data: datos,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").hide();
			$("#boton_agregar").hide();
			$("#informacion").show();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Modificando Datos, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			$("#formulario").hide();
			$("#boton_agregar").show();
			$("#informacion").hide();
			$("#listado").show();
			ConsultarDatos();
			
		}
	});
	return false;
}

function Cancelar(){
	$("#formulario").hide();
	$("#listado").show();
	$("#boton_agregar").show();
	$("#informacion").hide();
	$("#configuracion").show();
	return false;
}
