
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Sysadmins">
<meta name="author" content="Matias Pierantoni">
<link rel="icon" href="./favicon.ico">
<title>Denuncias Beta</title>
<!-- Bootstrap core CSS -->
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Material Design fonts -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
	type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- Bootstrap Material Design -->
<link
	href="./bootstrap-material-design-master/dist/css/bootstrap-material-design.css"
	rel="stylesheet">
<link href="./bootstrap-material-design-master/dist/css/ripples.min.css"
	rel="stylesheet">

<link href="./nvd3/build/nv.d3.min.css" rel="stylesheet">


<link
	href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css"
	rel="stylesheet">


<!-- Custom styles -->
<link href="dashboard.css" rel="stylesheet">
</head>

<body>


<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-gus-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="./index.php" style="font-size: 25px;"><span>S</span>istema Judicial</a>
					</div>

					<div class="navbar-collapse collapse navbar-gus-responsive-collapse">
						<ul class="nav navbar-nav navbar-right">


							<li class="hidden-lg"><a href="./index.php?&op=1"><i class="material-icons">home</i> Inicio</a></li>
							<li class="hidden-lg"><a href="./index.php?&op=2"><i class="material-icons">report_problem</i> Denuncias</a></li>
							<li class="hidden-lg"><a href="./index.php?&op=3"><i class="material-icons">help</i> Ayuda</a></li>


							<li class="dropdown">
								<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 12px; padding-bottom: 12px;">
									<img class="img-circle" src="./imagenes/emma.png" alt="icon" width="34" height="34">
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="javascript:void(0)">
											<i class="material-icons">person</i> Perfil
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<i class="material-icons">settings</i> Preferencias
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="javascript:void(0)">
											<i class="material-icons">cancel</i> Logout
										</a>
									</li>
								</ul>
							</li>

						</ul>
					</div>

			</div>
		</div><div class="container-fluid">
				<div class="row">
					<div class="col-sm-3 col-md-2 sidebar">

						<ul class="nav nav-sidebar navbar-collapse collapse" role="navigation">
							<li class=" withripple">
								<a href="./">
									<i class="material-icons">home</i> Inicio
								</a>
							</li>
							<li>
							<li class="active withripple">
								<a href="./index.php?&op=2">
									<i class="material-icons">report_problem</i> Denuncias
								</a>
							</li>

							<li class=" withripple">
								<a href="./index.php?&op=3">
									<i class="material-icons">help</i> Ayuda
								</a>
							</li>
						</ul>
			</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">


	<div class="row main">
		<div class="col-xs-12 col-sm-6 col-md-12">

			<div class="page-header" style="margin-bottom: 0px;">
				<div class="pull-left">
					<h1>Denuncias</h1>
				</div>
				<div class="pull-right">
					<h2 class="text-right" style="margin-top: 10px;"></h2>
				</div>
				<div class="clearfix"></div>
			</div>


			<div id="parte0">

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive" style="border: none;">
									<a href="javascript:void(0)" id="parte0-nueva-denuncia"
										class="btn btn-raised btn-primary">Nueva denuncia</a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive" style="border: none;">

									<h2 style="text-align: center;">Denuncias recientes</h2>
									<br> <br>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Número</th>
												<th>Ingresada</th>
												<th>Tipo</th>
												<th>Localidad</th>
												<th>Fecha</th>
											</tr>
										</thead>
										<tbody>
											<tr class="clickable-row" data-denunca="1">
												<td>1</td>
												<td>05/01/2016</td>
												<td>Amenaza</td>
												<td>Viedma</td>
												<td>05/01/2016</td>
											</tr>
											<tr class="clickable-row" data-denunca="2">
												<td>1</td>
												<td>05/01/2016</td>
												<td>Amenaza</td>
												<td>Viedma</td>
												<td>05/01/2016</td>
											</tr>
											<tr class="clickable-row" data-denunca="3">
												<td>1</td>
												<td>05/01/2016</td>
												<td>Amenaza</td>
												<td>Viedma</td>
												<td>05/01/2016</td>
											</tr>
											<tr class="clickable-row" data-denunca="4">
												<td>1</td>
												<td>05/01/2016</td>
												<td>Amenaza</td>
												<td>Viedma</td>
												<td>05/01/2016</td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>

						</div>

					</div>

				</div>

			</div>
			<!-- Fin Parte 0 -->

			<div id="parte1" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">
									<fieldset>
										<legend>Por favor elija la forma de recepción de la denuncia</legend>

										<div class="form-group" id="form_radio_recepcion">

											<div class="col-md-10">
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Persona en fiscalia"> Persona en fiscalia
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Persona en sede policial"> Persona en sede policial
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Persona por escrito"> Persona por escrito
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte1-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte1-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 1 -->

			<div id="parte2" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Por favor elija el tipo de denuncia</legend>

										<div class="form-group" id="form_radio_tipo_denuncia">

											<div class="col-md-10">
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Amenazas"> Amenazas
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Robos/hurtos"> Robos/hurtos
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Lesiones"> Lesiones
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Impedimento de contacto"> Impedimento de contacto
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="optionsRadios"
														value="Incumplimiento"> Incumplimiento
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte2-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte2-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 2 -->

			<div id="parte3" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos del denunciante</legend>

										<div class="form-group" id="dni_busqueda">
											<label for="input_DNI_denunciante" class="col-md-2 control-label">DNI del denunciante</label>

											<div class="col-md-10">
												<input class="form-control" id="input_DNI_denunciante" name="input_DNI_denunciante" placeholder="DNI">
												<button id="buscar_dni_denunciante" type="button" class="btn btn-primary"><i class="material-icons">search</i> Buscar</button>
											</div>

										</div>

										<br> <br> <br>
										<span id="dni_ingreso" hidden="true">
										<legend>En caso de no existir debera ingresar los datos</legend>

										<div class="form-group">
											<label for="inputDNI" class="col-md-2 control-label">DNI del
												denunciante</label>

											<div class="col-md-10">
												<input class="form-control" id="input_DNI_denunciante_ingreso" placeholder="DNI">
											</div>
										</div>

										<div class="form-group">
											<label for="inputNombre" class="col-md-2 control-label">Nombre</label>

											<div class="col-md-10">
												<input class="form-control" id="input_nombre_denunciante_ingreso"
													placeholder="Nombre">
											</div>
										</div>
									</span>


										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte3-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte3-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 3 -->

			<div id="parte4" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos del denunciado</legend>

										<div class="form-group">
											<label for="inputDNI" class="col-md-2 control-label">Ingrese
												DNI del denunciado</label>

											<div class="col-md-10">
												<input class="form-control" id="inputDNI" placeholder="DNI">
											</div>
										</div>

										<br> <br> <br>

										<legend>En caso de no existir debera ingresar los datos</legend>

										<div class="form-group">
											<label for="inputDNI" class="col-md-2 control-label">DNI del
												denunciado</label>

											<div class="col-md-10">
												<input class="form-control" id="inputDNI" placeholder="DNI">
											</div>
										</div>

										<div class="form-group">
											<label for="inputNombre" class="col-md-2 control-label">Nombre</label>

											<div class="col-md-10">
												<input class="form-control" id="inputNombre"
													placeholder="Nombre">
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte4-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte4-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 4 -->

			<div id="parte5" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos del hecho</legend>

										<div class="form-group">
											<label for="inputClasifLegal" class="col-md-2 control-label">Calificación
												legal</label>

											<div class="col-md-10">
												<input class="form-control" id="inputClasifLegal"
													placeholder="Clasificación Legal">
											</div>
										</div>


										<div class="form-group">
											<label for="textArea" class="col-md-2 control-label">Hecho</label>

											<div class="col-md-10">
												<textarea class="form-control" rows="3" id="textArea"></textarea>
												<span class="help-block">Ingrese una descripción completa
													del hecho.</span>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte5-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte5-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 5 -->


			<div id="parte6" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos del hecho: Robo</legend>


										<div class="form-group">
											<label for="textArea" class="col-md-2 control-label">Robo</label>

											<div class="col-md-10">
												<textarea class="form-control" rows="3" id="textArea"></textarea>
												<span class="help-block">Ingrese una descripción completa
													del robo.</span>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte6-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte6-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 6 -->


			<div id="parte7" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos del acto de toma de denuncia</legend>


										<div class="form-group">
											<label for="inputNumero" class="col-md-2 control-label">Número</label>

											<div class="col-md-10">
												<input class="form-control" id="inputNumero"
													placeholder="Número">
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte7-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte7-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 7 -->


			<div id="parte8" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">

								<form class="form-horizontal">

									<fieldset>
										<legend>Datos de la registración de la denuncia en el sistema</legend>


										<div class="form-group">
											<label for="inputFecha" class="col-md-2 control-label">Fecha</label>

											<div class="col-md-10">
												<input class="form-control" id="inputFecha"
													placeholder="Fecha">
											</div>
										</div>

										<br> <br>

										<legend>Resumen de los datos ingresados</legend>

										<!-- Para mostrar un resumen de los datos cargados con jquery-->
										<div id="resumen_datos_cargados"></div>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte8-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte8-siguiente" type="button"
													class="btn btn-primary">Finalizar</button>
											</div>
										</div>
									</fieldset>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Parte 8 -->

		</div>
	</div>
</div>







<script src="./jquery-2.2.0.min.js"></script>
			<script src="./bootstrap/js/bootstrap.min.js"></script>
			<script src="./bootstrap-material-design-master/dist/js/ripples.min.js"></script>
			<script src="./bootstrap-material-design-master/dist/js/material.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js" charset="utf-8"></script>
			<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
			 <!-- Wizard -->
    		<script src="./twitter-bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    		<script src="./jquery-validation/dist/jquery.validate.min.js"></script>
			<!-- BAJAR -->
			<script src="./nvd3/build/nv.d3.min.js"></script>


			<script type="text/javascript">
				$.material.init();
			</script>
		<script type="text/javascript">

//En parte 0 del wizard
$('#parte0-nueva-denuncia').on('click', function() {
	$("#parte0").hide();
	$("#parte1").show();
});

//En parte 1 del wizard
$('#parte1-siguiente').on('click', function() {
	$("#parte1").hide();
	$("#parte2").show();
});

$('#parte1-atras').on('click', function() {
	$("#parte0").show();
	$("#parte1").hide();
});

//En parte 2 del wizard
$('#parte2-siguiente').on('click', function() {
	$("#parte2").hide();
	$("#parte3").show();
});

$('#parte2-atras').on('click', function() {
	$("#parte1").show();
	$("#parte2").hide();
});

//En parte 3 del wizard
$('#parte3-siguiente').on('click', function() {
	$("#parte3").hide();
	$("#parte4").show();
});

$('#parte3-atras').on('click', function() {
	$("#parte2").show();
	$("#parte3").hide();
});

//En parte 4 del wizard
$('#parte4-siguiente').on('click', function() {
	$("#parte4").hide();
	$("#parte5").show();
});

$('#parte4-atras').on('click', function() {
	$("#parte3").show();
	$("#parte4").hide();
});

//En parte 5 del wizard
$('#parte5-siguiente').on('click', function() {
	$("#parte5").hide();
	$("#parte6").show();
});

$('#parte5-atras').on('click', function() {
	$("#parte4").show();
	$("#parte5").hide();
});

//En parte 6 del wizard
$('#parte6-siguiente').on('click', function() {
	$("#parte6").hide();
	$("#parte7").show();
});

$('#parte6-atras').on('click', function() {
	$("#parte5").show();
	$("#parte6").hide();
});

//En parte 7 del wizard
$('#parte7-siguiente').on('click', function() {
	$("#parte7").hide();
	$("#parte8").show();


	$resumen = '';
	$resumen = $resumen + '<p><b>Recepción denuncia: </b>' + $('input[name=optionsRadios]:checked', '#form_radio_recepcion').val() + '</p>';
	$resumen = $resumen + '<p><b>Tipo de denuncia: </b>' + $('input[name=optionsRadios]:checked', '#form_radio_tipo_denuncia').val() + '</p>';

	$resumen = $resumen + '<p><b>DNI denunciante: </b>' + $('#input_DNI_denunciante_ingreso').val() + '</p>';
	$resumen = $resumen + '<p><b>Nombre denunciante: </b>' + $('#input_nombre_denunciante_ingreso').val() + '</p>';


	$('#resumen_datos_cargados').html($resumen);

});

$('#parte7-atras').on('click', function() {
	$("#parte6").show();
	$("#parte7").hide();
});

//En parte 8 del wizard
$('#parte8-siguiente').on('click', function() {
	$("#parte8").hide();
	$("#parte0").show();

});

$('#parte8-atras').on('click', function() {
	$("#parte7").show();
	$("#parte8").hide();
});



//----------------------------------------------------------------------------------------------

$("#buscar_dni_denunciante").on('click',function(){

		var formData = {
			'input_DNI_denunciante'       : $('#input_DNI_denunciante').val(),
		};

		// process the form
		$.ajax({
			type        : 'POST',
			url         : './cd_denuncias-buscar-dni-denunciante.php',
			data        : formData,
			dataType    : 'json',
			encode      : true,
		})//ajax


		// using the done promise callback
		.done(function(data) {
		// log data to the console
			console.log(data);
			// here we will handle errors and validation messages
			//alert('success');

			if(data.success == 'true'){
				$exito = '<h4> La solicitud con fecha se ha cargado exitosamente.</h4><br>';
				alert('DNI encontrado');
				$('#input_DNI_denunciante_ingreso').val(data.dni_ingresado);
				$('#input_nombre_denunciante_ingreso').val(data.nombre);

			}else{
				$exito = '<h4>Ha habido un error al cargar la consulta.</h4><br>';
				alert('No se encuentra un DNI por favor ingrese los datos');
			}

			});//done

			// stop the form from submitting the normal way and refreshing the page
			event.preventDefault();
		});//form

</script>
</div>
</div>


</body>
</html>
