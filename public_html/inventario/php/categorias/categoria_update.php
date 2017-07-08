<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/categoria_controller.php'); 
	$categoria = new Categorias();
	$id = $_REQUEST['categoria_id'];
	$nombre = $_REQUEST['nombre'];
	$icono = $_REQUEST['icono'];
	$retorno = $categoria->edit_categoria($nombre,$id,$icono);
	//echo json_encode($retorno,JSON_NUMERIC_CHECK);
	header("Location: categoria_index.php");
?>