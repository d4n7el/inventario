<?php 
		require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php'); 
		$product = new Producto();
		$id = $_REQUEST['id_producto'];
		$retorno = $product->get_producto($id);
		echo json_encode($retorno);
		//echo json_encode($retorno,JSON_NUMERIC_CHECK);
		//sleep(6);
 ?>