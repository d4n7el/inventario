<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/categoria_controller.php');
	$categoria = new Categorias();
	$retorno = $categoria->get_categoria('%%'); ?>
	<div class="select_categorias col-md-7" style="padding: 0px">
		<select name="<?php echo $name; ?>categoria" class="form-control ">
		<option >Categoria</option>
		<?php foreach ($retorno as $value) { ?>
			<?php ($value['id'] ==  $select_categoria) ? $selected = "selected" :  $selected = ""  ?>
			<option value="<?php echo $value['id'] ?>" <?php echo $selected ?>><?php echo $value['nombre'] ?></option>
		<?php } ?>
		</select>
	</div>