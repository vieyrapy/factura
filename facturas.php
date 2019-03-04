<?php
	/*-------------------------
	Sistema para control de facturas 
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Facturas | Studio Sánchez";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbar.php");
	?>  

		<div class="col-xs-12 col-sm-6 col-md-2">
			<div class="container">
	    		<iframe width="400" height="300" src="http://www.cambioschaco.com.py/widgets/cotizacion/?lang=es" frameborder="0"> </iframe> 
	    	</div>
		</div>
		
	<div class="col-xs-12 col-sm-6 col-md-10">
	    <div class="container">
			<div class="panel panel-info">
			<div class="panel-heading">
			    <div class="btn-group pull-right">
					<a  href="nueva_factura.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>
				</div>
				<h4><i class='glyphicon glyphicon-search'></i> Buscar Facturas</h4>
			</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" id="datos_cotizacion">
					
							<div class="form-group row">
								<label for="q" class="col-md-2 control-label">Cliente o # de factura</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="q" placeholder="Nombre del cliente o # de factura" onkeyup='load(1);'> 
								</div>
								
								
								
								<div class="col-md-3">
									<button type="button" class="btn btn-default" onclick='load(1);'>
										<span class="glyphicon glyphicon-search" ></span> Buscar</button>
									<span id="loader"></span>
								</div>
								
							</div>
					
					
					
				</form>
					<div id="resultados"></div><!-- Carga los datos ajax -->
					<div class='outer_div'></div><!-- Carga los datos ajax -->
				</div>
			</div>	
			
		</div>
	</div>

	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/facturas.js"></script>
  </body>
</html>