<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/categoria_controller.php'); 
	$categoria = new Categorias();
	$nombre = $_REQUEST['nombre'];
	$icono = $_REQUEST['icono'];
	$retorno = $categoria->insert_categoria($nombre,$icono);
	//echo json_encode($retorno,JSON_NUMERIC_CHECK);
	header("Location: ../../index.php");
?>