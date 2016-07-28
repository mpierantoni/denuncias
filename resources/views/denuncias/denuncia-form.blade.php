@extends('layouts.app') @section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">Denuncia</div>

			<div class="panel-body">
				<!-- Display Validation Errors -->
				@include('common.errors')

				<!-- Update Denuncia Form -->
				<form action="{{ url('denuncia') }}" method="POST"
					class="form-horizontal">
					{{ csrf_field() }}

					<!-- Denuncia fields -->
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


					<div class="form-group" id="persona_busqueda">
						<label for="denunciante_id" class="col-md-2 control-label">DNI</label>

						<div class="col-md-10">

							<input class="form-control" id="denunciante_id"
								name="denunciante_id" placeholder="denunciante_id">
						</div>
					</div>

					<input type="hidden" name="id" id="denuncia-id"
						value="{{ $denuncia->id }}" class="form-control">

					<!-- Tomar Denuncia Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa"></i> Grabar Denuncia
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>
	@endsection