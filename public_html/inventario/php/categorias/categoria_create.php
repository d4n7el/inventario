<?php 
	if (isset($_REQUEST['categoria_id'])) {
		require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/categoria_controller.php');
		$categorias = new Categorias();
		$id = $_REQUEST['categoria_id'];
		$retorno = $categorias->get_categoria($id);
		foreach ($retorno as $value) { 
			$categoria = $value['nombre'];
			$id = $value['id'];
			$icono = $value['vista_icono'];
			$ruta = "/inventario/php/categorias/categoria_update.php";
			$titulo = "Actualizar Categoria";
		}
	}else{
		$ruta = "/inventario/php/categorias/categoria_new.php";		$titulo = "Crear Categoria";
		$categoria ="";		$id = "";		$icono = "";
	}
 ?>
<div class="categoria_create col-md-12">	
	<form action="<?php $_SERVER['DOCUMENT_ROOT'] ?> <?php echo $ruta ?> " method="post">
		<input type="text" class="form-control hide" placeholder="Categoria_id" name = "categoria_id" value="<?php echo $id ?>">
		<div class="input-group col-xs-12  col-sm-12  col-md-12">
		  	<label for="producto" class="form-control-label sr-only">Categoria</label>
		  	<div class="input-group-addon"><span class="icon-pie-chart"></span></div>
		    <input type="text" class="form-control" id="producto" placeholder="Categoria" name = "nombre" value="<?php echo $categoria ?>" required>
		</div>
		<input type="text" class="form-control hide" id="selection_icono"  placeholder="icono" name = "icono" value="<?php echo $icono; ?>">
		<?php ($icono == "") ? $botton = "Icono" : $botton = "" ?>
		<?php if (isset($_REQUEST['categoria_id'])) { ?>
				<button type="button" class="btn btn-primary " id="icono_update" data-toggle="modal" data-target="#modal_2" >
					<span class="<?php echo $icono; ?>"></span><?php echo $botton; ?>
				</button>
		<?php }else{ ?>
				<button type="button" class="btn btn-primary" id="icono_new" data-toggle="modal" data-target="#modal_2" >
					<span class="<?php echo $icono; ?>"></span><?php echo $botton; ?>
				</button>
		<?php } ?>
		
		<input type="submit" class="btn btn-primary" value="Guardar">
	</form>
</div>