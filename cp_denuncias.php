
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">


	<div class="row main">
		<div class="col-xs-12 col-sm-6 col-md-12">

			<div class="page-header" style="margin-bottom: 0px;">
				<!-- 				<div class="pull-left"> -->
				<!-- 					<h1>Denuncias</h1> -->
				<!-- 				</div> -->
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
										<legend>Datos del denunciante, 27422113</legend>

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
										<span id="denunciante_form">
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
													id="input_nombre_denunciante_ingreso" placeholder="Nombres">
											</div>
										</div>

										<div class="form-group">
											<label for="inputApellidos" class="col-md-2 control-label">Apellidos</label>

											<div class="col-md-10">
												<input class="form-control"
													id="input_apellidos_denunciante_ingreso"
													placeholder="Apellidos">
											</div>
										</div>

										<div class="form-group">
											<label for="inputDomicilio" class="col-md-2 control-label">Domicilio</label>

											<div class="col-md-10">
												<input class="form-control"
													id="input_apellidos_denunciante_ingreso"
													placeholder="Domicilio">
											</div>
										</div>

										<div class="form-group">
											<label for="inputLocalidad" class="col-md-2 control-label">Localidad</label>

											<div class="col-md-10">
												<input class="form-control"
													id="input_apellidos_denunciante_ingreso"
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
												
<button id="parte8-siguiente" type="button" onClick="javascript:window.open('generar-pdf.php', '_blank');"	class="btn btn-primary">Finalizar</button>
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







