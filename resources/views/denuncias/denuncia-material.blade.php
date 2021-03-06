@extends('layouts.app') @section('content')
<div class="row main">
	<div class="col-xs-12 col-sm-6 col-md-12">

		<div class="page-header" style="margin-bottom: 0px;">
			<!-- <div class="pull-left">
        <h1>Denuncias</h1>
      </div> -->
			<div class="pull-right">
				<h2 class="text-right" style="margin-top: 10px;"></h2>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="table-responsive" style="border: none;">
			<form id="denuncia_form" action="{{ url('denuncia') }}" method="POST"
				class="form-horizontal">
				{{ csrf_field() }}
				<div id="parte1" style="display: none;">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">

									<fieldset>
										<legend>Por favor elija la forma de recepción de la denuncia</legend>

										<div class="form-group" id="form_radio_recepcion">

											<div class="col-md-10">
												<div class="radio radio-primary">
													<label> <input type="radio" name="recepcionForma"
														value="Persona en fiscalia"> Persona en fiscalia
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="recepcionForma"
														value="Persona en sede policial"> Persona en sede policial
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="recepcionForma"
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

									<fieldset>
										<legend>Por favor elija el tipo de denuncia</legend>

										<div class="form-group" id="form_radio_tipo_denuncia">

											<div class="col-md-10">
												<div class="radio radio-primary">
													<label> <input type="radio" name="denunciaTipo"
														value="Amenazas"> Amenazas
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="denunciaTipo"
														value="Robos/hurtos"> Robos/hurtos
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="denunciaTipo"
														value="Lesiones"> Lesiones
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="denunciaTipo"
														value="Impedimento de contacto"> Impedimento de contacto
													</label>
												</div>
												<div class="radio radio-primary">
													<label> <input type="radio" name="denunciaTipo"
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

									<fieldset>
										<legend>Datos del denunciante</legend>
										<input id="denunciante_id" hidden="true" name="denunciante_id">

										<div class="form-group" id="persona_busqueda">
											<label for="input_DNI_denunciante"
												class="col-md-2 control-label">DNI</label>

											<div class="col-md-10">
												<input class="form-control" id="input_DNI_denunciante"
													name="input_DNI_denunciante" placeholder="DNI">
												<button id="buscar_denunciante" type="button"
													class="btn btn-primary">
													<i class="material-icons">search</i> Buscar
												</button>
											</div>


										</div>
										<span id="denunciante_form" style="display: none;">
											<div class="form-group" id="denunciante_div">
												<label for="inputDNI" class="col-md-2 control-label">DNI</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_DNI_denunciante_ingreso" placeholder="DNI">
												</div>
											</div>

											<div class="form-group">
												<label for="inputNombre" class="col-md-2 control-label">Nombres</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_nombres_denunciante_ingreso"
														placeholder="Nombres" required="required">
												</div>
											</div>

											<div class="form-group">
												<label for="inputApellidos" class="col-md-2 control-label">Apellidos</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_apellidos_denunciante_ingreso"
														placeholder="Apellidos" required="required">
												</div>
											</div>

											<div class="form-group">
												<label for="nacionalidad" class="col-md-2 control-label">Nacionalidad</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_nacionalidad_denunciante_ingreso"
														placeholder="Nacionalidad" required="required">
												</div>
											</div>

											<div class="form-group">
												<label for="nacimientoDenuncianteFecha"
													class="col-md-2 control-label">Fecha de Nacimiento</label>

												<div class="col-md-10">
													<input class="well" id="nacimientoDenuncianteFecha"
														name="nacimientoDenuncianteFecha" placeholder="dd/mm/yyyy" required="required">
												</div>
											</div>

											<div class="form-group">
												<label for="inputDomicilio" class="col-md-2 control-label">Domicilio</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_domicilio_denunciante_ingreso"
														placeholder="Domicilio">
												</div>
											</div>

											<div class="form-group">
												<label for="inputLocalidad" class="col-md-2 control-label">Localidad</label>

												<div class="col-md-10">
													<input class="form-control"
														id="input_localidad_denunciante_ingreso"
														placeholder="Localidad">
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

									<fieldset>
										<legend>Datos del denunciado</legend>

										<legend>En caso de no existir debera ingresar los datos</legend>

										IDEM denunciante

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<button id="parte4-atras" type="button"
													class="btn btn-default">Atras</button>
												<button id="parte4-siguiente" type="button"
													class="btn btn-primary">Siguiente</button>
											</div>
										</div>
									</fieldset>

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

									<fieldset>
										<legend>Datos del hecho</legend>

										<div class="form-group">
											<label for="hechoFecha" class="col-md-2 control-label">Fecha</label>

											<div class="col-md-10">
												<input class="well" id="hechoFecha" name="hechoFecha"
													placeholder="dd/mm/yyyy">
											</div>
										</div>

										<div class="form-group">
											<label for="hechoLocalidad" class="col-md-2 control-label">Localidad</label>

											<div class="col-md-10">
												<input class="form-control" id="hechoLocalidad"
													name="hechoLocalidad" placeholder="Localidad">
											</div>
										</div>

										<div class="form-group">
											<label for="inputClasifLegal" class="col-md-2 control-label">Calificación
												legal</label>

											<div class="col-md-10">
												<input class="form-control" id="inputClasifLegal"
													name="inputClasifLegal" placeholder="Clasificación Legal">
											</div>
										</div>


										<div class="form-group">
											<label for="textArea" class="col-md-2 control-label">Hecho</label>

											<div class="col-md-10">
												<textarea class="form-control" rows="3" id="textArea"
													name="hechoTexto"></textarea>
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

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Parte 5 -->


				<div id="parte6" >
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">

									<fieldset>
										<legend>Datos del hecho: Robo</legend>

										<div class="form-group">
											<div class="col-md-10 col-md-offset-2">
												<select class="form-control valid"
													id="select_objeto_robado" aria-invalid="false">
													<option value="Auto">Auto</option>
													<option value="Moto">Moto</option>
													<option value="Bici">Bici</option>
													<option value="Perro">Perro</option>
												</select>
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

									<fieldset>
										<legend>Datos del acto de toma de denuncia</legend>


										<div class="form-group">
											<label for="actoNumero" class="col-md-2 control-label">Número</label>

											<div class="col-md-10">
												<input class="form-control" id="actoNumero"
													name="actoNumero" placeholder="Número">
											</div>
										</div>

										<div class="form-group">
											<label for="actoLocalidad" class="col-md-2 control-label">Localidad</label>

											<div class="col-md-10">
												<input class="form-control" id="actoLocalidad"
													name="actoLocalidad" placeholder="Localidad">
											</div>
										</div>

										<div class="form-group">
											<label for="actoFecha" class="col-md-2 control-label">Fecha</label>

											<div class="col-md-10">
												<input class="well" id="actoFecha" name="actoFecha"
													placeholder="dd/mm/yyyy">
											</div>
										</div>

										<div class="form-group">
											<label for="actoAgente" class="col-md-2 control-label">Agente</label>

											<div class="col-md-10">
												<input class="form-control" id="actoAgente"
													name="actoAgente" placeholder="Nombre del Agente">
											</div>
										</div>

										<div class="form-group">
											<label for="actoOrganismo" class="col-md-2 control-label">Organismo</label>

											<div class="col-md-10">
												<input class="form-control" id="actoOrganismo"
													name="actoOrganismo" placeholder="Nombre del Organismo">
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

									<fieldset>
										<legend>Confirme los datos ingresados para generar la denuncia</legend>


										<br> <br>

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

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Parte 8 -->
			</form>
		</div>
	</div>
</div>



<script type="text/javascript">
$.material.init();

$.ajaxSetup({ headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }});

//En parte 1 del wizard
$('#parte1-siguiente').on('click', function() {
$("#parte1").hide();
$("#parte2").show();
});

//En parte 2 del wizard
$('#parte2-siguiente').on('click', function() {
$("#parte2").hide();
$("#parte3").show();
$('#denunciante_form').find(':input').prop('disabled', true);
});

$('#parte2-atras').on('click', function() {
$("#parte1").show();
$("#parte2").hide();
});

//En parte 3 del wizard
$('#parte3-siguiente').on('click', function() {

	if($(denunciante_id).val()) {
		$("#parte3").hide();
		$("#parte4").show();
		return;		
	}
		
	var formData = {
	'dni' : $('#input_DNI_denunciante_ingreso').val(),
	'nombres' : $('#input_nombres_denunciante_ingreso').val(),
	'apellidos' : $('#input_apellidos_denunciante_ingreso').val(),
	'fecha_nacimiento' : $('#input_fecha_denunciante').val(),
	'localidad' : $('#input_localidad_denunciante_ingreso').val(),
	'domicilio' : $('#input_domicilio_denunciante_ingreso').val(),
	'fecha_nacimiento' : $('#nacimientoDenuncianteFecha').val(),
	'nacionalidad' : $('#input_nacionalidad_denunciante_ingreso').val()
	};

	console.log(formData);

	// process the form
	$.ajax({
	type : 'post',
	url : './persona',
	data : formData,
	dataType : 'json',
	encode : true,
    success: function(data){ 

			console.log(data);
			$('#denunciante_id').val(data.id);
            $('#denunciante_form').find(':input').prop('disabled', true);
			alert('Denunciante agregado al sistema: ' + data.dni)
    	},
    error: function(data){
        alert('Verifique la validez de los datos: ' + data.responseText) 
        },
	})//ajax
	event.preventDefault();
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
$resumen = $resumen + '<p><b>Nombres denunciante: </b>' + $('#input_nombres_denunciante_ingreso').val() + '</p>';


$('#resumen_datos_cargados').html($resumen);

});

$('#parte7-atras').on('click', function() {
$("#parte6").show();
$("#parte7").hide();
});

//En parte 8 del wizard
$('#parte8-siguiente').on('click', function() {
$("#parte8").hide();
$("#denuncia_form")[0].submit();
});

$('#parte8-atras').on('click', function() {
$("#parte7").show();
$("#parte8").hide();
});



//----------------------------------------------------------------------------------------------


$("#buscar_denunciante").click(function(){
  $('#denunciante_id').val("");

  $.ajax({
    url: "./persona?dni="+$("#input_DNI_denunciante").val(),
    type: "get",
    dataType: 'application/json',
    processData: false,
    contentType: false,
    error: function(data) {
                var persona = $.parseJSON(data.responseText);
				$('#denunciante_form').show();    			                                  
                if(data.responseText == '{}'){
                    alert('La persona no se encuentra en el sistema. Por favor ingrese los datos');
                    $('#denunciante_form').find(':input').val("");  					
    			    $('#denunciante_form').find(':input').prop('disabled', false);
  					$('#input_DNI_denunciante_ingreso').val($("#input_DNI_denunciante").val());
  					$('#input_nombres_denunciante_ingreso').focus();
    			}else{    
                    $('#denunciante_form').find(':input').prop('disabled', true);
  					$('#denunciante_id').val(persona.id);
  					$('#input_DNI_denunciante_ingreso').val(persona.dni);
    				$('#input_nombres_denunciante_ingreso').val(persona.nombres);    			                  
    				$('#input_apellidos_denunciante_ingreso').val(persona.apellidos);    			                  
    				$('#nacimientoDenuncianteFecha').val(persona.fecha_nacimiento);    			                  
    				$('#input_nacionalidad_denunciante_ingreso').val(persona.nacionalidad);    			                  
    				$('#input_localidad_denunciante_ingreso').val(persona.localidad);    			                  
    				$('#input_domicilio_denunciante_ingreso').val(persona.domicilio);    			                  
    			    }
            },
    serror: function(data) {
                console.log(data);
                  alert("Ocurrio un error, por favor intente de nuevo.");
              }
  });
});

// -------- Validator

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      

//       $('form').submit(function(e) {
//         e.preventDefault();
//         var submit = true;

//         // evaluate the form using generic validaing
//         if (!validator.checkAll($(this))) {
//           submit = false;
//         }

//         if (submit)
//           this.submit();

//         return false;
//       });
    
$('#actoFecha').datepicker({format: "dd/mm/yyyy"});
$('#hechoFecha').datepicker({format: "dd/mm/yyyy"});
$('#nacimientoDenuncianteFecha').datepicker({format: "dd/mm/yyyy"});
</script>
@endsection
