@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Denuncia
            </div>

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- Update Denuncia Form -->
        <form action="{{ url('denuncia') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Denuncia fields -->
            <div class="form-group">
                <label for="denuncia-name" class="col-sm-3 control-label">Denuncia</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="denuncia-name" value="{{ $denuncia->name }}" class="form-control">
                    <input type="hidden" name="id" id="denuncia-id" value="{{ $denuncia->id }}" class="form-control">
                </div>
            </div>

            <!-- Tomar Denuncia Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Actualizar Denuncia
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>

</div>
@endsection
