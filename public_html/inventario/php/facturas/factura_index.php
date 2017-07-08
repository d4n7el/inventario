<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/factura_controller.php'); 
	
	if (!isset($_REQUEST['fecha_inicial'])) {
		require($_SERVER['DOCUMENT_ROOT'].'/inventario/php/facturas/_filtro.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php'); 
	}
	$acumulado_ingresos = 0;
	$paso = 1;
	(isset($_REQUEST['fecha_inicial'])) ? $fecha_inicial =  $_REQUEST['fecha_inicial']. " 00:00" : $fecha_inicial = "";
	(isset($_REQUEST['fecha_final'])) ? $fecha_final = $_REQUEST['fecha_final']. " 23:59" : $fecha_final = "";
	$venta = new Facturas();
	$retorno = $venta->get_factura($fecha_inicial,$fecha_final); ?>

	<div class="col-md-12 contenedor_listado_factura">
		<?php foreach ($retorno as $value) { 
			$acumulado_ingresos = $acumulado_ingresos + $value['valor_total'];
			require($_SERVER['DOCUMENT_ROOT'].'/inventario/php/facturas/_listado_facturas.php'); 
		}?>
	</div>
<?php ?>