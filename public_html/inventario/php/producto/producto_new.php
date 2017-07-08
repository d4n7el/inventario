<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php'); 
	$product = new Producto();
	$producto = $_REQUEST['producto'];
	$codigo = $_REQUEST['codigo'];
	$cantidad = $_REQUEST['cantidad'];
	$unidad = $_REQUEST['unidad'];
	$valor = $_REQUEST['precio'];
	$categoria = $_REQUEST['categoria'];
	$valor_al_mayor = $_REQUEST['precio_al_mayor'];
	$notificacion = $_REQUEST['notificacion'];
	$valor_compra = $_REQUEST['valor_compra'];
	

	$retorno = $product->insert_producto($producto,$codigo,$cantidad,$unidad,$valor,$categoria,$valor_al_mayor,$notificacion,$valor_compra);
	//echo json_encode($retorno,JSON_NUMERIC_CHECK);
	header("Location: ../../index.php");
?>