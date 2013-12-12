// JavaScript Document
var modulo = "sav_productos";
var ruta_control = "../../controlador/" + modulo;
var ruta_vista = "../../vista/" + modulo;

$(document).ready(function(){	
  $("#formulario").hide();
  $("#informacion").hide();
  $("#filtros").hide();
  ConsultarDatos();

  $("#boton_agregar").click(function(){
    $("#listado").hide();
    $("#boton_agregar").hide();
    $("#boton_filtros").hide();
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

  $("#boton_filtros").click(function(){
    $("#listado").hide();
    $("#boton_agregar").hide();
    $("#boton_filtros").hide();
    $.ajax({
      url: ruta_vista + '/formulario_filtro.php',
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
  var datos = "submit=";
  datos += "&pagina=" + aux_pagina;
  datos += "&numero_paginas=" + numero_paginas
  datos += "&filtro_codigo_sap=" + $('#filtro_codigo_sap').attr('value');
  datos += "&filtro_descripcion_real_sap=" +  $('#filtro_descripcion_real_sap').attr('value');
  datos += "&filtro_descripcion_unificada=" +  $('#filtro_descripcion_unificada').attr('value');
  datos += "&filtro_unidad_negocio=" + $('#filtro_unidad_negocio').attr('value');
  datos += "&filtro_linea=" + $('#filtro_linea').attr('value');
  datos += "&filtro_familia=" + $('#filtro_familia').attr('value');
  datos += "&filtro_subfamilia_1=" + $('#filtro_subfamilia_1').attr('value');
  datos += "&filtro_subfamilia_2=" + $('#filtro_subfamilia_2').attr('value');
  $.ajax({
    url: ruta_control + '/consulta_productos_lista.php',
    cache: false,
    type: "POST",
    data: datos,
    beforeSend: function(objeto){
      $("#listado").hide();
      $('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");
      $("#informacion").show();
    },
    success: function(datos){
      $("#informacion").hide();
      $("#listado").html(datos);
      $("#listado").show();
    }
  });

}

function PaginaAnt(pagina){
  var numero_paginas = $('#numero_paginas').attr('value');
  var aux_pagina = parseInt (pagina) - parseInt (numero_paginas);
  var datos = "submit=";
  datos += "&pagina=" + aux_pagina;
  datos += "&numero_paginas=" + numero_paginas
  datos += "&filtro_codigo_sap=" + $('#filtro_codigo_sap').attr('value');
  datos += "&filtro_descripcion_real_sap=" +  $('#filtro_descripcion_real_sap').attr('value');
  datos += "&filtro_descripcion_unificada=" +  $('#filtro_descripcion_unificada').attr('value');
  datos += "&filtro_unidad_negocio=" + $('#filtro_unidad_negocio').attr('value');
  datos += "&filtro_linea=" + $('#filtro_linea').attr('value');
  datos += "&filtro_familia=" + $('#filtro_familia').attr('value');
  datos += "&filtro_subfamilia_1=" + $('#filtro_subfamilia_1').attr('value');
  datos += "&filtro_subfamilia_2=" + $('#filtro_subfamilia_2').attr('value');

  $.ajax({
    url: ruta_control + '/consulta_productos_lista.php',
    cache: false,
    type: "POST",
    data: datos,
    beforeSend: function(objeto){
      $("#listado").hide();
      $('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");
      $("#informacion").show();
    },
    success: function(datos){
      $("#informacion").hide();
      $("#listado").html(datos);
      $("#listado").show();
    }
  });

}

function ConsultarDatosFiltro(){
  var pagina = $('#pagina').attr('value');
  if( !isNaN(pagina)||(pagina == null) ||(pagina == 'undefined') ){ pagina = '0'; }
  var datos = "submit=";
  datos += "&pagina=" + pagina;  
  datos += "&numero_paginas=10";
  datos += "&filtro_codigo_sap=" + $('#f_codigo_sap').attr('value');
  datos += "&filtro_descripcion_real_sap=" +  $('#f_descripcion_real_sap').attr('value');
  datos += "&filtro_descripcion_unificada=" +  $('#f_descripcion_unificada').attr('value');
  datos += "&filtro_unidad_negocio=" + $('#f_unidad_negocio').attr('value');
  datos += "&filtro_linea=" + $('#f_linea').attr('value');
  datos += "&filtro_familia=" + $('#f_familia').attr('value');
  datos += "&filtro_subfamilia_1=" + $('#f_subfamilia_1').attr('value');
  datos += "&filtro_subfamilia_2=" + $('#f_subfamilia_2').attr('value');

  $.ajax({
    url: ruta_control + '/consulta_productos_lista.php',
    cache: false,
    type: "POST",
    data: datos,
    beforeSend: function(objeto){
      $("#informacion").show();
      $('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");
    },
    success: function(datos){
      $("#formulario").hide();
      $("#filtros").hide();
      $("#informacion").hide();
      $("#configuracion").show();
      $("#boton_agregar").show();
      $("#boton_filtros").show();
      $("#listado").html(datos);
      $("#listado").show();
    }
  });
}

function ConsultarDatos(){
  var pagina = $('#pagina').attr('value');
  if( !isNaN(pagina)||(pagina == null) ||(pagina == 'undefined') ){ pagina = '0'; }
  var datos = "submit=";
  datos += "&pagina=" + pagina;
  datos += "&numero_paginas=10";
  datos += "&filtro_codigo_sap=" + $('#filtro_codigo_sap').attr('value');
  datos += "&filtro_descripcion_real_sap=" +  $('#filtro_descripcion_real_sap').attr('value');
  datos += "&filtro_descripcion_unificada=" +  $('#filtro_descripcion_unificada').attr('value');
  datos += "&filtro_unidad_negocio=" + $('#filtro_unidad_negocio').attr('value');
  datos += "&filtro_linea=" + $('#filtro_linea').attr('value');
  datos += "&filtro_familia=" + $('#filtro_familia').attr('value');
  datos += "&filtro_subfamilia_1=" + $('#filtro_subfamilia_1').attr('value');
  datos += "&filtro_subfamilia_2=" + $('#filtro_subfamilia_2').attr('value');

  $.ajax({
    url: ruta_control + '/consulta_productos_lista.php',
    cache: false,
    type: "POST",
    data: datos,
    beforeSend: function(objeto){
      $("#informacion").show();
      $('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Consultando Datos, favor espere un momento</h2></div>");
    },
    success: function(datos){
      $("#formulario").hide();
      $("#filtros").hide();
      $("#informacion").hide();
      $("#configuracion").show();
      $("#listado").html(datos);
    }
  });
}

function GrabarDatos(){
        var datos = 'submit=';
        datos += '&codigo_sap=' + $('#codigo_sap').attr('value');
        datos += '&descripcion_real_sap=' + $('#descripcion_real_sap').attr('value');
        datos += '&descripcion_unificada=' + $('#descripcion_unificada').attr('value');
        datos += '&unidad_negocio=' + $('#unidad_negocio').attr('value');
        datos += '&linea=' + $('#linea').attr('value');
        datos += '&familia=' + $('#familia').attr('value');
        datos += '&subfamilia_1=' + $('#subfamilia_1').attr('value');
        datos += '&subfamilia_2=' + $('#subfamilia_2').attr('value');

	$.ajax({
		url: ruta_control + '/grabar.php',
		type: "POST",
		data: datos,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").show();
			$("#boton_agregar").show();
			$("#boton_filtros").show();
			$("#informacion").show();
			$("#configuracion").hide();
	$('#informacion').html("<br><br><br><div align=\"center\"><img src=\"../../img/ajax-loader_grande.gif\"><h2>Grabando Datos, favor espere un momento</h2></div>");
	  	},
		success: function(datos){
			$("#informacion").hide();
			alert (datos);
			ConsultarDatos();
		}
	});
	return false;
}

function EliminarDatos(idsav_productos){
	ret = confirm ("Esta seguro de eliminar el dato?");
	if (!ret) return false; 
	$.ajax({
		url: ruta_control + '/eliminar.php',
		type: "POST",
		data: "submit=&idsav_productos=" + idsav_productos,
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

function ModificarDatos(idsav_productos){ 
	$.ajax({
		url: ruta_vista + '/formulario_modificar.php',
		type: "POST",
		data: "submit=&idsav_productos=" + idsav_productos,
		beforeSend: function(objeto){
			$("#formulario").hide();
			$("#listado").show();
			$("#boton_agregar").hide();
			$("#boton_filtros").hide();
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
  var datos = 'submit=';
  datos += '&idsav_productos=' + $('#idsav_productos').attr('value');
  datos += '&codigo_sap=' + $('#codigo_sap').attr('value');
  datos += '&descripcion_real_sap=' + $('#descripcion_real_sap').attr('value');
  datos += '&descripcion_unificada=' + $('#descripcion_unificada').attr('value');
  datos += '&unidad_negocio=' + $('#unidad_negocio').attr('value');
  datos += '&linea=' + $('#linea').attr('value');
  datos += '&familia=' + $('#familia').attr('value');
  datos += '&subfamilia_1=' + $('#subfamilia_1').attr('value');
  datos += '&subfamilia_2=' + $('#subfamilia_2').attr('value');

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
      $("#boton_filtros").show();
      $("#informacion").hide();
      $("#listado").show();
      ConsultarDatos();
    }
  });
  return false;
}

function Cancelar(){
	$("#informacion").hide();
	$("#formulario").hide();
	$("#boton_agregar").show();
        $("#boton_filtros").show();
	$("#configuracion").show();
	$("#listado").show();
	return false;
}
