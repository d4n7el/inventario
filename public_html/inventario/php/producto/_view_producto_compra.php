<div class="col-sm-12 col-md-10 col-sm-offset-0 col-md-offset-1 producto_compra">
	<div class="col-md-1">
		<p class="col-xs-3 col-xs-offset-6 col-sm-12 col-md-12"><span class="<?php echo $value['vista_icono']; ?> view_icono"></span></p>
	</div>
	<div class="col-md-12">
		<strong class="col-xs-12 col-sm-12 col-md-12" name="nombre">Producto : <?php echo $value['nombre']; ?></strong>
		<strong class="col-xs-12 col-sm-12 col-md-12">Categoria : <?php echo $value['cate_nom']; ?></strong>
		<strong class="col-xs-12 col-sm-12 col-md-12">Valor detalle : <?php echo $value['valor']; ?></strong>
		<strong class="col-xs-12 col-sm-12 col-md-12">Valor por mayor : <?php echo $value['valor_por_mayor']; ?></strong>
		<strong class="col-xs-12 col-sm-12 col-md-12">Disponibles: <?php echo $value['cantidad']; ?> </strong>
		
	</div>
	<form action="" class="select_product" id="<?php echo $value['id_producto']; ?>">
		<input type="text" id="nombre_<?php echo $value['id_producto']; ?>" class="hide" name="name_producto" value="<?php echo $value['nombre'];?>">
		<input type="text" id="id_<?php echo $value['id_producto']; ?>" class="hide" name="id_producto" value="<?php echo $value['id_producto']; ?>"	>
		<div class="col-md-5">
			<select name="tipo_compra" id="compra_<?php echo $value['id_producto']; ?>" class="form-control" required>
				<option value="1">Detalle</option>
				<option value="2">Por mayor</option>
			</select>
		</div>
		 <div class="input-group col-xs-12  col-sm-12  col-md-7">
	      	<label for="cantidad_producto" class="form-control-label sr-only">Cantidad</label>
	      	<div class="input-group-addon"><span class="icon-plus"></span></div>
	        	<input type="number" class="form-control" id="cantidad_producto_<?php echo $value['id_producto']; ?>" placeholder="Cantidad" name = "cantidad_producto" min="1" max="<?php echo $value['cantidad']; ?>" required>
	    </div>
	    <input type="submit" class="btn btn-primary col-xs-12  col-sm-12 col-md-12 select_product" id="<?php echo $value['id_producto']; ?>" value="Agregar">
    </form>
</div>
