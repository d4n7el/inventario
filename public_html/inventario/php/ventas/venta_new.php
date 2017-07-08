<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/factura_controller.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/venta_controller.php');
	$product = new Producto();
	$factura = new Facturas();
	$venta = new Ventas();
	$contador = 0;
	$acumulado = 0;
	$valorXcantidad = 0;
	$acum_id = [];
	$acum_valorXcantidad = [];
	$acum_cantidades = [];
	$acum_valorUnidad = [];
	$cantidad_productos_finales = 0;
	$sql_product = "";
	$sql_venta = "";
	$producto = $_REQUEST['producto'];
	$cantidad = $_REQUEST['cantidad'];
	$tipo = $_REQUEST['tipo'];
	$pago = $_REQUEST['pago'];
	if (count($producto) > 0) {
		foreach($producto as $valor){
			$sql_product.= $valor." OR id_producto = ";
		}
		$sql_product = substr($sql_product,0,-18);
		$retorno = $product->get_value_form_pay($sql_product);
		
		foreach($retorno as $valor){
			$posicion = array_search($retorno[$contador]['id_producto'], $producto);
			if ($tipo[$posicion] == "Detalle") {
				$valor_unidad = $retorno[$contador]['valor'];
				$valorXcantidad = $valor_unidad * $cantidad[$posicion];
			}elseif ($tipo[$posicion] == "Por mayor") {
				$valor_unidad = $retorno[$contador]['valor_por_mayor'];
				$valorXcantidad = $valor_unidad * $cantidad[$posicion];
			}
			$cantidad_productos_finales = $cantidad_productos_finales + $cantidad[$posicion];
			$acumulado = $acumulado + $valorXcantidad;
			array_push($acum_id, $producto[$posicion]);
			array_push($acum_valorXcantidad, $valorXcantidad);
			array_push($acum_cantidades, $cantidad[$posicion]);
			array_push($acum_valorUnidad,$valor_unidad);
			$contador++;
		}
		$retorno_id_factura = $factura->insert_factura($acumulado,$cantidad_productos_finales);
		$contador = 0;
		foreach($acum_id as $valor){
			$sql_venta.= "(".$retorno_id_factura.",".$valor.",".$acum_valorXcantidad[$contador].",".$acum_cantidades[$contador].",".$acum_valorUnidad[$contador]." ),";
			$contador++;
		}
		$sql_venta = substr($sql_venta,0,-1);
		$retorno = $venta->insert_venta($sql_venta);
		echo json_encode($retorno,JSON_NUMERIC_CHECK);
		//header("Location: ../../php/ventas/venta_create.php");
	}else{
		echo json_encode(0,JSON_NUMERIC_CHECK);
	}
?>