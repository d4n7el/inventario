<?php 
	if (isset($_REQUEST['producto_id'])) {
		require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/controller/producto_controller.php'); 
		$product = new Producto();
		$id = $_REQUEST['producto_id'];
		$retorno = $product->get_producto($id);
    $id_form = "update_producto";
    $name = "new_";
    $ruta = "/inventario/php/producto/producto_update.php";
		foreach ($retorno as $value) { 
			$nombre = $value['nombre'];
			$codigo = $value['codigo'];
			$cantidad = $value['cantidad'];
			$unidad = $value['unidad_kg'];
      $precio = $value['valor'];
      $precio_al_mayor = $value['valor_por_mayor'];
      $select_categoria = $value['id_categoria'];
      $notificacion = $value['notificacion'];
      $valor_compra = $value['valor_compra'];
		} 
	}else{
    $name = "";   $nombre = "";   $codigo = "";   $cantidad = "";   $unidad = "";   $precio = "";   $select_categoria = "";   $valor_compra = "";
    $precio_al_mayor = "";     $notificacion = "";
		$ruta = "/inventario/php/producto/producto_new.php";
    $id_form = "registrar_producto";
    require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/layout.php');
	}

 ?>
<form action="<?php $_SERVER['DOCUMENT_ROOT']?><?php echo $ruta; ?>" id="<?php echo  $id_form; ?>" method="post">
  <div class="col-md-12 producto_create">
    <input type="text" class="hide" value="<?php echo $id; ?>" name="<?php echo $name; ?>producto_id" >
		    <div class="input-group col-xs-12  col-sm-12  col-md-12">
          	<label for="producto" class="form-control-label sr-only">Producto</label>
          	<div class="input-group-addon"><span class="icon-cart"></span></div>
            <input type="text" class="form-control" id="producto" placeholder="Producto" name = "<?php echo $name; ?>producto" value="<?php echo $nombre ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
          	<label for="codigo" class="form-control-label sr-only">Codigo</label>
          	<div class="input-group-addon"><span class="icon-barcode"></span></div>
            	<input type="text" class="form-control" id="codigo" placeholder="Codigo" name = "<?php echo $name; ?>codigo" value="<?php echo $codigo ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
            <label for="valor_compra" class="form-control-label sr-only">Valor compra</label>
            <div class="input-group-addon"><span class="icon-coin-dollar"></span></div>
            <input type="int" class="form-control" id="valor_compra" placeholder="Valor compra" min="1" name = "<?php echo $name; ?>valor_compra" value="<?php echo $valor_compra ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
          	<label for="cantidad" class="form-control-label sr-only">Cantidad</label>
          	<div class="input-group-addon"><span class="icon-plus"></span></div>
            	<input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name = "<?php echo $name; ?>cantidad" value="<?php echo $cantidad ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
          	<label for="unidad" class="form-control-label sr-only">Unidad </label>
          	<div class="input-group-addon"><span class="icon-stopwatch"></span></div>
            <input type="text" class="form-control" id="unidad" placeholder="Unidad" name = "<?php echo $name; ?>unidad" value="<?php echo $unidad ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
            <label for="notificacion" class="form-control-label sr-only">Notificación</label>
            <div class="input-group-addon"><span class="icon-bell"></span></div>
            <input type="text" class="form-control" id="notificacion" placeholder="Notificación" name = "<?php echo $name; ?>notificacion" value="<?php echo $notificacion ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
          	<label for="precio" class="form-control-label sr-only">Precio al detalle</label>
          	<div class="input-group-addon"><span class="icon-coin-dollar"></span></div>
            <input type="text" class="form-control" id="precio" placeholder="Precio al detalle" name = "<?php echo $name; ?>precio" value="<?php echo $precio ?>" required>
        </div>
        <div class="input-group col-xs-12  col-sm-12  col-md-12">
            <label for="precio_al_mayor" class="form-control-label sr-only"> al por mayor</label>
            <div class="input-group-addon"><span class="icon-coin-dollar"></span></div>
            <input type="text" class="form-control" id="precio_al_mayor" placeholder=" al por mayor" name = "<?php echo $name; ?>precio_al_mayor" value="<?php echo $precio_al_mayor ?>" required>
        </div>
        <?php   require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/categorias/_select_categorias.php');  ?>
        <div class="col-md-2 col-md-offset-9">
          <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
  </div>
  
  
</form>
