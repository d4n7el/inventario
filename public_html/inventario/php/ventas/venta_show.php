<?php 
	$paso = 0;
	$id_factura = $_REQUEST['id_factura'];
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/venta_controller.php'); 
	$venta = new Ventas();
	$retorno = $venta->get_venta($id_factura);


	foreach ($retorno as $value) { 
		require($_SERVER['DOCUMENT_ROOT'].'/inventario/php/ventas/_listado_venta.php');
		$paso = 1;
	}
?>