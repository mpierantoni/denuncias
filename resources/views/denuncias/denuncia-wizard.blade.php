@extends('layouts.app')

@section('content')
<div class="col-md-6 col-xs-12">
    <div class="x_panel">

<div id="rootwizard">
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
	<ul>
	  	<li><a href="#tab1" data-toggle="tab">Forma de Toma</a></li>
		<li><a href="#tab2" data-toggle="tab">Tipo de Denuncia</a></li>
		<li><a href="#tab3" data-toggle="tab">Denunciante</a></li>
		<li><a href="#tab4" data-toggle="tab">Denunciado</a></li>
		<li><a href="#tab5" data-toggle="tab">Fifth</a></li>
		<li><a href="#tab6" data-toggle="tab">Sixth</a></li>
		<li><a href="#tab7" data-toggle="tab">Seventh</a></li>
	</ul>
	 </div>
	  </div>
	</div>
	<div id="bar" class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
    </div>
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Denuncia de persona:</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select id="forma" class="form-control">
              <option disabled="true" selected="true" value=null>Elija la forma</option>
              <option value="fiscalia">En Fiscalia</option>
              <option value="policial">En Sede Policial</option>
              <option value="escrito">Por Escrito</option>
            </select>
          </div>
        </div>
	    </div>
	    <div class="tab-pane" id="tab2">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Denuncia</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <select id="tipo" class="form-control">
              <option disabled="true" selected="true" value=null>Elija el tipo</option>
              <option value="amenazas">Sobre Amenazas</option>
              <option value="robos_hurtos">Sobre Robos/Hurtos</option>
              <option value="lesiones">Lesiones</option>
              <option value="impedimento_contacto">Impedimento de Contacto</option>
              <option value="incumplimiento">Incumplimiento Deberes Asistencia Familiar</option>
            </select>
          </div>
        </div>
	    </div>
		<div class="tab-pane" id="tab3">
      <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="denunciante_dni">DNI</label>
          <div class="input-group">
            <input id="denunciante_dni" class="form-control col-md-7 col-xs-12">
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary">Go!</button>
            </span>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="denunciante_nombres">Nombres</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input id="denunciante_nombres" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
      <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="denunciante_apellidos">Apellidos</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input id="denunciante_apellidos" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
	  </div>
		<div class="tab-pane" id="tab4">
			4
	    </div>
		<div class="tab-pane" id="tab5">
			5
	    </div>
		<div class="tab-pane" id="tab6">
			6
	    </div>
		<div class="tab-pane" id="tab7">
			7
	  </div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Previous</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#">Next</a></li>
		</ul>
	</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
  	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
			// if(index==1) {
      //
			// 	// Make sure we entered the name
			// 	if(!$('#forma').val()) {
			// 		alert('Debe elegir la forma de denuncia');
			// 		$('#name').focus();
			// 		return false;
			// 	}
			// }
      //
			// if(index==2) {
      //
			// 	// Make sure we entered the name
			// 	if(!$('#tipo').val()) {
			// 		alert('Debe elegir el tipo de denuncia');
			// 		$('#name').focus();
			// 		return false;
			// 	}
			// }
			if(index==3) {

				// Make sure we entered the name
				if(!$('#denunciante_dni').val()) {
					alert('Debe ingresar un DNI');
					$('#denunciante_dni').focus();
					return false;
				}
				if(!$('#denunciante_nombres').val()) {
					alert('Debe ingresar nombre/s');
					$('#denunciante_nombres').focus();
					return false;
				}
				if(!$('#denunciante_apellidos').val()) {
					alert('Debe ingresar apellido/s');
					$('#denunciante_apellidos').focus();
					return false;
				}
			}

			// Set the name for the next tab
			$('#tab4').html('Hello, ' + $('#name').val());

		}, onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard .progress-bar').css({width:$percent+'%'});
		}});
});
</script>
@endsection
