@extends('layouts.app') @section('content')
@include('denuncias.denuncia-template')
<div class="table-responsive" style="border: none;">
	<span id="generar-pdf" data-url="{{ url('pdf?id='.$denuncia->id) }}"
		class="btn btn-raised btn-primary">Generar PDF</span> 
</div>
<script src="./jquery-2.2.0.min.js"></script>
<script type="text/javascript">
$(function($) {
    $("#generar-pdf").click(function() {
    	window.open($(this).data("url"), '_blank');
    });
});
</script>
@endsection
