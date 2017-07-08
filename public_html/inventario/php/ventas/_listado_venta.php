<div class="col-md-12">
	<?php if ($paso == 0) { ?>
		<h3><?php echo $value['id']; ?></h3>
		<h3><?php echo $value['fecha_creacion']; ?></h3>
		<h3 class="col-md-12">Acumulado: $ <?php echo $value['valor_total']; ?></h3>
		<h3 class="col-md-6">Producto</h3>
		<h3 class="col-md-3">Cantidad</h3>
		<h3 class="col-md-3">Total</h3>
	<?php } ?>
	<h5 class="col-md-6"> <?php echo $value['nombre']; ?></h5>
	<h5 class="col-md-3"> <?php echo $value['cantidad']; ?></h5>
	<h5 class="col-md-3"> <?php echo $value['valor_venta']; ?></h5>
	
</div>