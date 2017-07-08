<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php'); 
	$product = new Producto();
	$id = $_REQUEST['new_producto_id'];
	$producto = $_REQUEST['new_producto'];
	$codigo = $_REQUEST['new_codigo'];
	$cantidad = $_REQUEST['new_cantidad'];
	$unidad = $_REQUEST['new_unidad'];
	$valor = $_REQUEST['new_precio'];
	$categoria = $_REQUEST['new_categoria'];
	$valor_al_mayor = $_REQUEST['new_precio_al_mayor'];
	$notificacion = $_REQUEST['new_notificacion'];
	$valor_compra = $_REQUEST['new_valor_compra'];
	$retorno = $product->edit_producto($producto,$codigo,$cantidad,$unidad,$valor,$id,$categoria,$valor_al_mayor,$notificacion,$valor_compra);
	//echo json_encode($retorno,JSON_NUMERIC_CHECK);
	header("Location: ../../index.php");
?>