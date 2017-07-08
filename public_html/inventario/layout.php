<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/css/style.css">
	<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/css/fonts/style.css">
	

</head>
<body>
	<div class="blur col-md-4"">
		
	</div>
	<a class="navbar-brand" href="#"><img src="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/img/logo.svg" class="logo" alt=""></a>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Tienda</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class=""><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/inventario">Productos <span class="sr-only">(current)</span></a></li>
					<li class=""><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/inventario/php/categorias/categoria_index.php">Categorias <span class="sr-only">(current)</span></a></li>
					<li class=""><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/inventario/php/ventas/venta_create.php">Nueva Venta <span class="sr-only">(current)</span></a></li>
					<li class=""><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/inventario/php/facturas/factura_index.php">Historico Facturas <span class="sr-only">(current)</span></a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" id="busqueda">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Busqueda" id="busqueda">
				        </div>
       					<button type="submit" class="btn btn-default hide" id="submit_busqueda">Submit</button>
      				</form>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
		<!-- ****************************	    modals      ***************************************	-->
	<div class="modal fade bs-example-modal-sm" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  		<div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content  col-xs-12 col-md-12" id="content_1">
    			
   			</div>
  		</div>
  		
	</div>
	<div class="modal fade bs-example-modal-lg" id="modal_2" tabindex="-100" role="dialog" aria-labelledby="mySmallModalLabel">
  		<div class="modal-dialog modal-lg" role="document">
    		<div class="modal-content col-xs-12 col-md-12 " id="content_2">
    			
   			</div>
  		</div>

	</div>
	<div class="alert alert-success alert-dismissible fade">
		<span class="icon-checkmark"></span>
  		<strong>Success!</strong>
	</div>
	<div class="alert alert-danger alert-dismissible fade">
		<span class="icon-warning"></span>
  		<strong>Success!</strong>
	</div>
	<script src="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/js/jQuery.js"></script>
	<script src="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/js/bootstrap.js"></script>
  	<script src="<?php $_SERVER['DOCUMENT_ROOT']?> /inventario/js/index.js"</script>
  	<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
</body>