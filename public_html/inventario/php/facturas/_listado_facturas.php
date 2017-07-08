<?php $randon = rand(-0,0); 
	if ($paso == count($retorno)) { ?>
		<div class="col-md-5 acumulado_facturas">
			<h4>Ingresos: $ <?php echo $acumulado_ingresos; ?></h4>
		</div>
<?php   } ?>
<div class="contenedor col-xs-5 col-sm-5 col-md-2">
	<div class="factura col-md-12" style="-webkit-transform: rotate(<?php echo $randon; ?>deg);">
		<span class="icon-radio-checked2"></span>
		<strong class="col-xs-12 col-sm-12 col-md-12">Valor total </strong>
		<p>$ <?php echo $value['valor_total'] ?></p>
		<strong class="col-xs-12 col-sm-12 col-md-12">Fecha </strong>
		<p><?php echo $value['fecha_creacion'] ?></p>
	</div>
	<button class="btn btn-success view_productos_factura col-xs-5 col-sm-5 col-md-4" data-toggle="modal" data-target="#modal_2" id_factura="<?php echo $value['id'] ?>"><span class="icon-zoom-in"  ></span></button>
	<button class="btn btn-danger col-xs-5 col-sm-5 col-md-4" data-toggle="modal"><span class="" ><?php echo $value['id']; ?> </span></button>
</div>
<?php $paso++ ?>
