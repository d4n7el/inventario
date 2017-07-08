<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/inventario_controller.php'); 
	$user = new Usuario();
	$id = $_REQUEST['usuario_id'];
	$pass = $_REQUEST['pass_usuario'];
	$retorno = $user->get_usuario(11);
	foreach ($retorno as $value) { 
		$pass_hash = $value['pass'];
		if (password_verify($pass,$pass_hash)) {
			$retorno = $user->delete_usuario($id);
			echo json_encode(1,JSON_NUMERIC_CHECK);
		}else{
			echo "error";
		}
	}
 ?>