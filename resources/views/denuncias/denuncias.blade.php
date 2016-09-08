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


		<div id="parte0">

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="table-responsive" style="border: none;">
								<a href="{{ url('denuncia-nueva') }}" id="parte0-nueva-denuncia"
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
										@foreach ($denuncias as $denuncia)
										<tr class="clickable-row" data-denunca="2"
											data-url="{{ url('denuncia?id='.$denuncia->id) }}">
											<td>{{ $denuncia->id }}</td>
											<td>{{ date('d/m/Y', strtotime($denuncia->acto_datetime)) }}</td>
											<td>{{ $denuncia->tipo }}</td>
											<td>{{ $denuncia->hecho_localidad }}</td>
											<td>{{ date('d/m/Y', strtotime($denuncia->hecho_datetime)) }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>

							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div>
</div>
<script src="./jquery-2.2.0.min.js"></script>
<script type="text/javascript">

$(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("url");
    });
});
</script>
@endsection