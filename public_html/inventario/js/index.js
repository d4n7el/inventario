$(document).on('ready',function(){
	recargar_eventos();
	fecha_actual();
	acumulado = 0;
	$('form#registro_factura_ventas').on('submit', function(event) {
		event.preventDefault();
		var cont = 0;
		var formData = new FormData(document.getElementById("registro_factura_ventas"));
		ajax_factura_ventas("../ventas/venta_new.php",formData);
	});
	$('a#presentation_new_categoria').on('click', function(event) {
		event.preventDefault();
		$('div.categoria_create').removeClass('hide');
		$('div.producto_create').fadeOut(0);
		$('div.categoria_create').fadeIn(800);
		$(this).addClass('active');
		$('a#presentation_new_producto').removeClass('active');
	});
	$('a#presentation_new_producto').on('click', function(event) {
		event.preventDefault();
		$('div.categoria_create').fadeOut(0);
		$('div.producto_create').fadeIn(800);
		$(this).addClass('active');
		$('a#presentation_new_categoria').removeClass('active');
	});
	$('#presentation_new_categoria').click();
});
function fecha_actual(){
	var hoy = new Date();			
	var dd = hoy.getDate(); var mm = hoy.getMonth()+1;	var yyyy = hoy.getFullYear();
	(dd<10) ?  dd='0'+dd : "" ;
	(mm<10) ?   mm='0'+mm : "" ;

	hoy = yyyy+'-'+mm+'-'+dd;
	$('input#fecha_final').val(hoy);
	$('input#fecha_inicial').val(hoy);
}
function eliminar_eventos(){
	$('#submit_busqueda').off('click');
	$('button.update_producto').off('click');
	$('#icono_update').off('click');
	$('#icono_new').off('click');
	$('form.select_product').off('click');
	$('form#registro_factura_ventas').off('click');
	$('form#busqueda_producto').off('click');
	$('button.btn-icono').off('click');
	$('button.update_categoria').off('click');
	$('button.view_productos_factura').off('click');
	$('span.eliminar_venta').off('click');
	$('form#filtro_fechas_facturas').off('click');
}
function eliminar_eventos_2(){
	$('span.eliminar_venta').off('click');
}
var recargar_eventos_2 = function(){ 
	eliminar_eventos_2();
	$('span.eliminar_venta').on('click', function(event) {
		event.preventDefault();
		var id = $(this).attr('eliminar_venta');
		acumulado = acumulado - parseInt($('input#pago_'+id).val()) ;
		$('h4#acumulado').text(acumulado);
		$('div#compra_producto_'+id).remove();
	});
}
var recargar_eventos = function(){ 
	eliminar_eventos();
	$('button.view_productos_factura').on('click', function(event) {
		$("div#content_2").load("../ventas/venta_show.php",{id_factura: $(this).attr('id_factura')},recargar_eventos);
	});
	$('button.update_producto').on('click', function(event) {
		$("div#content_1").load("../inventario/php/producto/producto_create.php",{producto_id: $(this).attr('producto_id')},recargar_eventos);
	});
	$('button.update_categoria').on('click', function(event) {
		$("div#content_1").load("categoria_create.php",{categoria_id: $(this).attr('categoria_id')},recargar_eventos);
	});
	$('#submit_busqueda').on('click', function(event) {
		event.preventDefault();
		$("div#listado").load("php/producto/producto_index.php",{producto: $('input#busqueda').val()},recargar_eventos);
	});
	$('#icono_new').on('click', function(event) {
		event.preventDefault();
		$("div#content_2").load("../inventario/php/categorias/_selection_icono.php",recargar_eventos);
	});
	$('#icono_update').on('click', function(event) {
		event.preventDefault();
		$("div#content_2").load("../categorias/_selection_icono.php",recargar_eventos);
	});
	$('button.btn-icono').on('click', function(event) {
		event.preventDefault();
		$('#modal_2').modal('hide')
		$('input#selection_icono').val($(this).attr('icono'));
	});
	$('form#busqueda_producto').on('submit', function(event) {
		event.preventDefault();
		var formData = $('input#busqueda_producto_compra').val();
		$("div#vista_productos").load("../producto/producto_index.php",{producto: formData, compra: true},recargar_eventos);
	});
	$('form.select_product').on('submit', function(event) {
		event.preventDefault();
		var id = $(this).attr('id');
		if ($('div#compra_producto_'+id).length > 0) {
			var cantidad_producto = parseInt($('input#cantidad_producto_'+id).val()) + parseInt($('input#cantidad_'+id).val());
			acumulado = acumulado -  parseInt($('input#pago_'+id).val());
			$('div#compra_producto_'+id).remove();
		}else{
			var cantidad_producto = $('input#cantidad_producto_'+id).val();
		}
		var tipo_compra = $('select#compra_'+id).val();
		var	nombre = $('input#nombre_'+id).val();
		ajax_productos("../producto/producto_show.php?id_producto="+id,tipo_compra,cantidad_producto,nombre,id);
	});
	$('form#filtro_fechas_facturas').on('submit', function(event) {
		event.preventDefault();
		var inicio = $('input#fecha_inicial').val();
		var fin = $('input#fecha_final').val();
		$('h4.guia').hide(300);
		$("div.contenedor_listado_factura").load("../facturas/factura_index.php",{fecha_inicial: inicio, fecha_final: fin},recargar_eventos);
	});
}
function ajax_productos(url,tipo_compra,cantidad_producto,nombre,id){
	(tipo_compra == 1) ? tipo_compra = "valor" : tipo_compra = "valor_por_mayor";
	$.ajax({
		url: url,
	    type: "POST",
	    dataType: "json",
	    cache: false,
	    contentType: false,
	    processData: false,
	    success: function(res){
	    		pago_producto = res[0][tipo_compra] * cantidad_producto;
	    		acumulado = acumulado + pago_producto;
	    		var icono = res[0].vista_icono;
	    		parse_form_datos(id,pago_producto,tipo_compra,cantidad_producto,nombre,id,icono);
	    },
	    // error: function(jqXHR,error,estado){
	    // 	console.log(error);
	    // 	console.log(jqXHR);
	    // 	console.log(estado);
	    // },timeout:1000,
	})
}
function mensaje_alert(tipo,mensaje){
	if (tipo == "success") {
		$("div.alert-success").addClass("in");
		$("div.alert-success strong").text(mensaje);
		setTimeout(function(){
			$("div.alert-success").removeClass("in");
		}, 5000);
	}else{
		$("div.alert-danger").addClass("in");
		$("div.alert-danger strong").text(mensaje);
		setTimeout(function(){
			$("div.alert-danger").removeClass("in");
		}, 5000);
	}
}
function ajax_factura_ventas(url,formData){
	$.ajax({
		url: url,
	    type: "POST",
	    dataType: "json",
	    data: formData,
	    cache: false,
	    contentType: false,
	    processData: false,
	    success: function(res){
	    	if(res > 0){
	    		limpiar_venta()
	    		mensaje_alert("success","Venta registrada.");
	    	}else{
	    		limpiar_venta()
	    		mensaje_alert("Error","Error al registrar.")
	    	}
	    },
	})
}
function limpiar_venta(){
	$('div.listado_productos_compra').html("");
	$('input#guardar_ventas').addClass('hide');
	$('h4#acumulado').html("Selecciona los productos de la compra");
	acumulado = 0;
}
function parse_form_datos(id,pago_producto,tipo_compra,cantidad_producto,nombre,id,icono){
	(tipo_compra == 'valor') ? tipo_compra = "Detalle" : tipo_compra = "Por mayor";
	html = 		'<div class="contenedor col-md-4" id="compra_producto_'+id+'">\
					<div class="col-sm-7 col-md-12 compra_producto" >\
					<div class="input-group col-xs-12  col-sm-12  col-md-12" id="venta_producto_'+id+'">\
			            <input type="int" class="form-control hide col-md-3" id="producto_'+id+'" name = "producto[]" value="'+id+'" required>\
			          	<input type="int" class="form-control hide col-md-1" id="cantidad_'+id+'" name = "cantidad[]" value="'+cantidad_producto+'" required>\
			          	<input type="text" class="form-control hide col-md-3" id="tipo_'+id+'" name = "tipo[]" value="'+tipo_compra+'" required>\
		        		<input type="int" class="form-control hide col-md-3" id="pago_'+id+'"  compra" name = "pago[]" value="'+pago_producto+'" required>\
		        	</div>\
		        	<input type="text" id="id_producto" class="hide" name="id_producto" value="'+id+'">\
			        <div class="col-xs-12 col-sm-12  col-md-12">\
			            <strong class="col-xs-12 col-sm-12 col-md-12">Producto : </strong><p>'+nombre+'</p>\
			            <strong class="col-xs-12 col-sm-12 col-md-12">Cantidad : </strong><p id="msg_cantidad_'+id+'">'+cantidad_producto+'</p>\
			            <strong class="col-xs-12 col-sm-12 col-md-12">Tipo de compra : </strong><p>'+tipo_compra+'</p>\
			            <strong class="col-xs-12 col-sm-12 col-md-12">valor $: </strong><p id="msg_pago_'+id+'">'+pago_producto+'</p>\
			        </div>\
			        <div class="col-md-1">\
						<p class="col-md-12"><span class="'+icono+' view_icono"></span></p>\
					</div>\
					<div class=" col-md-3 col-md-offset-9">\
						<span class="btn btn-danger icon-cancel-circle eliminar_venta" eliminar_venta="'+id+'"></span>\
					</div>\
				</div>\
	        </div>' 

	$('div.listado_productos_compra').append(html);
	$('input#busqueda_producto_compra').val("");
	recargar_eventos_2();
	$('input#busqueda_producto_compra').focus();
	$('input#guardar_ventas').removeClass('hide');
	$('h4#acumulado').html(acumulado);
}

