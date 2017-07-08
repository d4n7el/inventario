<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php'); 
	if (isset($_REQUEST['producto'])) {
		$product = new Producto();
		$busqueda = $_REQUEST['producto'];
		$retorno = $product->filter_producto($busqueda);
	}else{
		require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php');
		$product = new Producto();
		(isset($_REQUEST['producto_id'])) ? $id = $_REQUEST['producto_id'] : $id = "%%";
		$retorno = $product->get_producto($id);
	}
	if (isset($_REQUEST['compra'])) {
		foreach ($retorno as $value) { 
			include($_SERVER['DOCUMENT_ROOT'].'/inventario/php/producto/_view_producto_compra.php'); 
		} 
	}else{
		foreach ($retorno as $value) {
		((int)$value['cantidad'] <= (int)$value['notificacion']) ? $color = "rgba(84,43,118,1)" : $color = "rgba(50,134,186,1)"; 
			$randon = rand(-0,0);
		?>
		<div class="contenedor col-sm-5 col-md-4">
			<div class="col-md-12 producto_view">
				<span class="icon-radio-checked2"></span>
				<strong class="col-xs-12 col-sm-12 col-md-12"><?php echo $value['nombre'] ?></strong>
				<p><span class="<?php echo $value['vista_icono']; ?>"> </span><?php echo $value['cate_nom'] ?></p>
				<p><?php echo $value['fecha_creacion'] ?></p>
			</div>
			<button type="button" class="btn btn-success update_producto col-xs-4 col-sm-5 col-md-3" data-toggle="modal" data-target="#modal_1" producto_id="<?php echo $value['id_producto']; ?>"><span class="icon-pencil2"></span></button>
			<button type="button" class="btn btn-danger update_producto col-xs-4 col-sm-5 col-md-3"><span class=""><?php echo $value['cantidad']; ?></span></button>
			
		</div>
	<?php } 
	} ?> 