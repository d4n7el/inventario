<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/categoria_controller.php');
	$categoria = new Categorias();
	$retorno = $categoria->get_categoria('%%'); ?>

		<?php foreach ($retorno as $value) { ?>
			<div class="contenedor  col-xs-5 col-sm-3 col-md-3">
				<div class="col-md-12 categoria_view">
					<p><?php echo $value['nombre'] ?></p>
					<p><?php echo $value['fecha'] ?></p>
				</div>
				<button type="button" class="btn btn-success update_categoria col-xs-4  col-sm-4 col-md-3" data-toggle="modal" data-target="#modal_1" categoria_id="<?php echo $value['id']; ?>"><span class="icon-pencil2"></span></button>
				<button type="button" class="btn btn-danger col-xs-4 col-sm-4 col-md-3" ><span class="<?php echo $value['vista_icono'] ?> vista_icono"></span></button>
			</div>
		<?php } ?>
