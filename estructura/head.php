<?php 
ini_set('display_errors', 1);
include 'lib/includes_sacp.php';?>
<!DOCTYPE html>
<html lang="es">
    <head>
		<title>Sistema de administración de la capacitación del personal</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<!--
		<link href="http://alfcastaneda.com/sacp/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
		<link rel="stylesheet" href="http://alfcastaneda.com/sacp/css/jquery-ui/smoothness/jquery-ui.css" />
		<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
		<link href="http://alfcastaneda.com/sacp/css/estilos.css" rel="stylesheet" media="screen">

		
    </head>
	<body>
	<div id="wrap">
	<?php include 'barra-principal.php'; ?>
		<div class="jumbotron">
			<div class="container">
				<?php if(esadmin()){include 'menu.php';} elseif(logged_in()){include 'menu_empleados.php';} ?>
			</div>
		</div>
	    <div class="container" id="contenedor-principal">
			  <div class="row show-grid">
		
	
