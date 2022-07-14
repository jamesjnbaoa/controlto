<?php
session_start();
if(!isset($_SESSION['k_username'])){
   // header("location:../index.php");
}
//include('../modelo/roles_modulos.php');
?>
<!DOCTYPE html> 
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Movilidad</title>  
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />  
	<link rel="icon" href="../assets/img/logonew.png">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css?v=1.0" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css?v=1.9.4" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<script src="../assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />

		<link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	<scripT>
			var handleScheduleCalendar = function() {
	var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	var dayNames = ["D", "L", "M", "X", "J", "V", "S"];

	var now = new Date(),
	dia = now.getDay()+13,
	    month = now.getMonth() + 1,
	    year = now.getFullYear();

   //var events = [[''+dia+'/'+month+'/'+year,'hola','#','COLOR_GREEN','estas es ']];
    //var events = [["1/1/2019","hi","#","COLOR_GREEN","xxx"]];
   	var events = <?php echo  str_replace('"COLOR_BLACK"', 'COLOR_BLACK',$resx); ?>;
   	console.log('evento: '+events);
	var calendarTarget = $('#schedule-calendar');
	$(calendarTarget).calendar({
		months: monthNames,
		days: dayNames,
		events: events,
		popover_options:{
			placement: 'top',
			html: true
		}
	});
	$(calendarTarget).find('td.event').each(function() {
		var backgroundColor = $(this).css('background-color');
		$(this).removeAttr('style');
		$(this).find('a').css('background-color', backgroundColor);
	});
	$(calendarTarget).find('.icon-arrow-left, .icon-arrow-right').parent().on('click', function() {
		$(calendarTarget).find('td.event').each(function() {
			var backgroundColor = $(this).css('background-color');
			$(this).removeAttr('style');
			$(this).find('a').css('background-color', backgroundColor);
		});
	});
};


	</scripT>
	
</head>  
<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="/medicamentos/vistas" class="navbar-brand"><span class="navbar-logo"></span> <b>Movilidad</b></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<div class="navbar-form">
						<div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_actual" placeholder="Enter keyword" value="<?php echo date("Y-m-d") ?>" disabled/>
<!--							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>-->
						</div>
					</div>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">0</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (0)</li>
						<li class="text-center width-300 p-b-10 text-inverse">
							No notification found
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<div class="image image-icon bg-black text-grey-darker">
							<i class="fa fa-user"></i>
						</div>
						<span class="d-none d-md-inline">Greys Martinez</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!--<a href="javascript:;" class="dropdown-item">Editar Perfil</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span>Bandeja de entrada</a>-->
						
							<a href="javascript:;"  onclick="empresa_i()" class="dropdown-item">Mi empresa</a>
					
						 	<a href="javascript:;" onclick="usuarios_i()" class="dropdown-item">Usuarios</a>
				
						<div class="dropdown-divider"></div>
						<a href="../salir.php" class="dropdown-item">Cerrar Sesión</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="image image-icon bg-black text-grey-darker">
								<i class="fa fa-user"></i>
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Greys Martinez
								<small>Ingeniera</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Ajustes</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Enviar comentarios</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Ayuda</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegación Control</li>
					<li class="active">
                                            <a href="index.php">
							<i class="fas fa-home fa-fw"></i>
							<span>Inicio</span>
						</a>
					</li>
                                        
                                         <!--prueba freddy-->
                                        
                                        
				   
                                        <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-clipboard fa-fw"></i> 
							<span>Servicios</span>
						</a>
						<ul class="sub-menu">
                                                    <li><a href="javascript:;" onclick="caja()">Lista de servicios</a></li>
					        
                                                      
						</ul>
					</li>
			
                                        <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-user fa-fw"></i> 
							<span>Terceros</span>
						</a>
						<ul class="sub-menu">
                                                    <li><a href="javascript:;" onclick="Tercer()">Terceros</a></li>
					          
                                                     <li><a href="javascript:;" onclick="Prove()">Proveedores</a></li>
                                                     <li><a href="javascript:;" onclick="kardex()">Conductores.</a></li>
                                                     
						</ul>
					</li>
				
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-info fa-fw"></i> 
							<span>Inventario</span>
						</a>
						<ul class="sub-menu">
					            
                                                     <li class="has-sub">
								<a href="javascript:;"> 
									<b class="caret"></b>
									Movimientos 
								</a>
								<ul class="sub-menu">
                                                                    
									<li><a href="javascript:;" onclick="formmovimientos('ENTRADA',0)">Entradas</a></li>
                                                                       
									<li><a href="javascript:;" onclick="formmovimientos('SALIDA',0)">Salidas</a></li>
                                                                              
                                                                        <li><a href="javascript:;" onclick="listmovimientos()">Movimientos Entradas</a></li>
                                                                        <li><a href="javascript:;" onclick="listmovimientossal()"> Salidas Guardadas</a></li>
                                                                        
								</ul>
							</li>
                                                        <li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									Configuracion
								</a>
								<ul class="sub-menu">
                                                                     <li><a href="javascript:;" onclick="Prove()">Proveedores</a></li>
									 <li><a href="javascript:;" onclick="categorias()">Categorias</a></li>
                                                                         <li><a href="javascript:;" onclick="subcategoria()">Sub Categorias</a></li>
                                                                         <li><a href="javascript:;" onclick="productos()">Productos</a></li>
                                                                         <li><a href="javascript:;" onclick="bodegas()">Bodegas</a></li>
                                                                         
                                                                         <li><a href="javascript:;" onclick="Marcas()">Marcas</a></li>
                                                                         <li><a href="javascript:;" onclick="TipoMov()">Tipos de Movimientos</a></li>
								</ul>
							</li>
						</ul>
					</li>               
					           
                       
                                        <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cogs fa-fw"></i> 
							<span>Configuracion</span>
						</a>
						<ul class="sub-menu">
					             <li><a href="javascript:;" onclick="categorias()">Nuevo producto</a></li> 
                                                     <li><a href="javascript:;" onclick="categorias()">Lista empleados</a></li> 
                                                     <li><a href="javascript:;" onclick="categorias()">Lista de usuarios</a></li> 
													 <li><a href="javascript:;" onclick="categorias()">Roles de usuarios</a></li>
                                                     
						</ul>
					</li>
                     
                                        <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-truck fa-fw"></i> 
							<span>Vehiculos</span>
						</a>
						<ul class="sub-menu">
					             <li><a href="javascript:;" onclick="categorias()">Vehiculos</a></li>                                                    
						</ul>
					</li>
                       
                                        <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-money-bill-alt fa-fw"></i> 
							<span>Cartera</span>
						</a>
						<ul class="sub-menu">
					             <li><a href="javascript:;" onclick="categorias()">Cartera</a></li>                                                    
						</ul>
					</li>
                    
                   <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-address-book fa-fw"></i> 
							<span>Contabilidad</span>
						</a>
                         <ul class="sub-menu">
					             <li><a href="javascript:;" onclick="puc()">Plan de Cuentas</li>
					              <li><a href="javascript:;" onclick="centros()">Centro de Costo</li>                                                    
						</ul>
					
					</li>
					
                                                                                              
                                    
                                     
                    
					                                                                     
                                  
                                 
                                        
                                                                                                                   
                                        <!--prueba freddy-->  
                                        
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header 
                        <h1 class="page-header" id="titulo">Bienvenidos Sr@ Greys Martinez <small>Plan </small></h1>
			 end page-header -->

			<!-- begin panel -->
                        <div id="controlador">
						<div class="row">

<div class="col-lg-12">
<div class="panel panel-inverse">
	<div class="panel-heading">
		<div class="panel-heading-btn">
			
		</div>
		<h4 class="panel-title">Bienvenidos Sr@ Greys Martinez <small>Plan </small></h4>
	</div>
					<div class="panel-body text-center">
						<img src="../assets/img/login-bg/signika.png" style="width:100%">	
		<p><i>Licencia exclusiva para : </i></p>
		<p><i>Documento No. : </i></p>
		<p><i>Email: </i></p>
		
	</div>
</div>
</div>

	   </div>
<div class="row">
<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">SERVICIOS ACTIVOS</div>
							<div class="stats-number" id="contador">

							25
                							</div>
                								
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 25.1%;"></div>
							</div>
							<div class="stats-desc">Servicios   </div>
						
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">Conductores Activos</div>
							<div class="stats-number">50</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70%;"></div>
							</div>
							<div class="stats-desc">Conductores totales  100</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-yellow">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">SOAT POR VENCER</div>
							<div class="stats-number">30</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 30%;"></div>
							</div>
							<div class="stats-desc">SOAT ACTIVOS 56</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">SOAT VENCIDOS</div>
							<div class="stats-number">10</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 45%;"></div>
							</div>
							<div class="stats-desc">SOAT ACTIVOS 56</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				
				<!-- end col-3 -->
				<!-- begin col-3 -->
				
			</div>
			
				   
                        </div>
			<!-- end panel -->
                        <div class="theme-panel theme-panel-lg">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cogs"></i></a>
			<div class="theme-panel-content">
                            <ul class="nav nav-tabs">
							<li class="nav-items">
							<a href="#default-tab-2" data-toggle="tab" class="nav-link active">
								<span class="d-sm-none">Tab 2</span>
								<span class="d-sm-block d-none">Apariencia</span>
							</a>
						</li>
						<!-- <li class="nav-items">
							<a href="#default-tab-1" data-toggle="tab" class="nav-link active">
								<span class="d-sm-none">Tab 1</span>
								<span class="d-sm-block d-none">+Cliente</span>
							</a>
						</li> -->
						

					</ul>
				<div class="tab-content">
						<!-- begin tab-pane -->
						<div class="tab-pane fade " id="default-tab-1">
                                                    <div class="form-group">
                                                                     <label onchange="consultar_c();" for="fullname">Numero de documento:</label>
							<input class="form-control" type="hidden" id="idtx"  placeholder="Consecutivo" disabled/>
										<input class="form-control" type="text" id="num_terx"  onchange="consultar_ter();" placeholder="#Documento"/>
									
								</div>
				                            <div class="form-group">
									<label>Tipo de identificacion:</label>
									
										<select class="form-control" id="tip_terx">
                                                                                <option value="">Seleccione</option>
                                                                                <option value="CC">CC</option>
                                                                                <option value="RC">RC</option>
                                                                                <option value="TI">TI</option>
                                                                                <option value="NIT">NIT</option>
                                                                              
                                                                            </select>
									
								</div>
                                                    <div class="form-group">
									<label>Tipo de Tercero:</label>
									
										<select class="form-control" id="tip_prox">
                                                                                <option value="0">Cliente</option>
                                                                                <option value="1">Proveedor</option>
                                                                               
                                                                              
                                                                            </select>
									
								</div>
								<div class="form-group">
									<label>Nombre completo:</label>
									
										<input class="form-control" type="text" id="nom_terx"  placeholder="Nombre Completo"/>
									
								</div>
                                                         
                                                             <div class="form-group">
									<label>Telefono o celular:</label>
									
									<input class="form-control" type="text" id="tel_terx"  placeholder="Telefonos"/>
									
								</div>
                                                             <div class="form-group">
									<label>Correo electronico:</label>
									
										<input class="form-control" type="text" id="cor_terx"  placeholder="Required"/>
									
								</div>
                                                               <div class="form-group">
									<label>Direccion domicilio:</label>
									
										<input class="form-control" type="text" id="dir_terx"  placeholder="Direccion"/>
									
								</div>
                                                    <div class="form-group">
                                                                            <select class="form-control" type="text" id="eps_terx">
                                                                                <option value="">Seleccione eps</option>
                                                                                <?php
                                                                                $queryp = mysqli_query($con,"select * from eps where id_empresa='$emp' ");
                                                                                while ($row = mysqli_fetch_array($queryp)) {
                                                                                    echo '<option value="'.$row[0].'">'.$row[2].'</option>';
                                                                                }
                                                                                ?>
                                                                            </select>  
									</div>
                                                    <div class="form-group">
                                                        <button class="btn btn-success" id="savecliente">Guardar</button>
                                                        <a href="javascript:;" onclick="Tercer()">Full Registro</a>	
								</div>
                                </div>
                                                <div class="tab-pane fade active show" id="default-tab-2">
                                                    <ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red"  data-theme="red" data-theme-file="../assets/css/transparent/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/transparent/theme/pink.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/transparent/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/transparent/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/transparent/theme/lime.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/transparent/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../assets/css/transparent/theme/teal.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/transparent/theme/aqua.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="../assets/css/transparent/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/transparent/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/transparent/theme/indigo.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/transparent/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Header</div>
					<div class="col-md-6">
						<select name="header-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
					<div class="col-md-6">
						<select name="sidebar-styling" class="form-control form-control-sm">
							<option value="1">default</option>
							<option value="2">grid</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
					<div class="col-md-6">
						<select name="sidebar-fixed" class="form-control form-control-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
					<div class="col-md-6">
						<select name="content-gradient" class="form-control form-control-sm">
							<option value="1">disabled</option>
							<option value="2">enabled</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
					<div class="col-md-6">
						<select name="direction" class="form-control form-control-sm">
							<option value="1">LTR</option>
							<option value="2">RTL</option>
						</select>
					</div>
				</div>
				<div class="divider"></div>
				<h5>VERSIONES</h5>
                        
                                
				<div class="theme-version">
					<a href="javascript:;" onclick="tema(<?php echo $emp ?>,'default')">
						<span style="background-image: url(../assets/img/theme/default.jpg);"></span>
					</a>
					<a href="javascript:;" onclick="tema(<?php echo $emp ?>,'transparent')">
						<span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="javascript:;" onclick="tema(<?php echo $emp ?>,'apple')">
						<span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
					</a>
					<a href="javascript:;" onclick="tema(<?php echo $emp ?>,'material')">
						<span style="background-image: url(../assets/img/theme/material.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="javascript:;" class="btn btn-inverse btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
					</div>
				</div>
                                                </div>
			</div>
		</div>
             
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="../js/function.js?v=200.6"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/material.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/d3/d3.min.js"></script>
	<script src="../assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/js/demo/dashboard-v2.js?v=1.2"></script>
	<script src="../assets/js/demo/dashboard.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
            DashboardV2.init();  
            //Dashboard.init(); 
		});
	</script>
      
</body>
</html>

