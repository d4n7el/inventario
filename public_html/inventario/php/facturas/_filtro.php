<?php  $dia = date("Y-m-d") ?>	
<form action="factura_index.php" id="filtro_fechas_facturas">
	<div class="col-xs-12  col-sm-7 col-md-5 filtro_fecha">
		<div class="input-group   col-md-12 ">
		  	<div class="input-group-addon"><span class="icon-calendar"></span></div>
		    <input type="date" class="form-control" id="fecha_inicial" name="fecha_inicial" value="<?php echo $dia; ?>" required>
		</div>
		<div class="input-group col-xs-12  col-sm-12  col-md-12 ">
		  	<div class="input-group-addon"><span class="icon-calendar"></span></div>
		    <input type="date" class="form-control " id="fecha_final" name="fecha_final" value="<?php echo $dia; ?>" required>
		</div>
		<input type="submit" class="btn btn-primary hide col-md-2" value="Filtrar">
		<h4 class="guia">Selecciona las fechas y presiona Enter</h4>
	</div>
</form>
