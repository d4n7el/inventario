<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php'); ?>

<div class="col-md-4 crear">
	<ul class="nav col-md-12 presentation">
		<li role="presentation" class="presentation col-md-6" >
			<a href="#" class="active" id="presentation_new_producto">Registrar Producto</a>
		</li>
		<li role="presentation" class="presentation  col-md-6">
			<a href="#" class="" id="presentation_new_categoria">Registar Categoria</a>
		</li>
	</ul>
	<div class="producto col-xs-12 col-sm-12 col-md-12">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/categorias/categoria_create.php'); ?>
	</div>
	<div class="producto col-md-12">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/producto/producto_create.php'); ?>
	</div>
</div>

<div class="col-xs-7 col-xs-offset-5 col-sm-7 col-sm-offset-5 col-md-8 col-md-offset-4 " id="listado">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/producto/producto_index.php'); ?>
	
</div>



