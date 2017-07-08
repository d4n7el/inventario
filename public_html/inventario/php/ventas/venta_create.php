<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/venta_controller.php'); 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php');
?>
<div class="cont_busqueda_producto col-md-12">
	<div class="busqueda_producto col-sm-12 col-md-12">
		<form action="" id="busqueda_producto">
			<div class="input-group col-sm-12 col-md-12">
			  	<label for="unidad" class="form-control-label sr-only">Codigo, Nombre ó Categoria</label>
			  	<div class="input-group-addon"><span class="icon-search"></span></div>
			    <input type="text"  class="form-control" id="busqueda_producto_compra" placeholder="Codigo, Nombre ó Categoria" name = "busqueda" value="">
			</div>
				<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10 hide" id="" value="Buscar">
		</form>
	</div>
	<div class="col-sm-12 col-md-12" id="vista_productos">
		
	</div>
</div>
<div class="listado_compra col-xs-6 col-xs-offset-6 col-sm-8 col-sm-offset-5 col-md-8 col-md-offset-4">
	<form action="venta_new.php" id="registro_factura_ventas" >
		<div class="col-md-5 col-md-offset-7 acumulado">
			<h4 id="acumulado">Selecciona los productos</h4>
		</div>
		
		<input type="submit" class="btn btn-primary hide col-sm-3 col-sm-offset-4 col-md-2" id="guardar_ventas" value="Guardar Venta">
		<div class="listado_productos_compra">
			
		</div>
		
	</form>
</div>