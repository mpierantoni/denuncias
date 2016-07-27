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

        {!! Form::model($denuncia, ['class' => 'form-horizontal']) !!}
            <div class="form-group">
              {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}<br>
              <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}<br>
              </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa"></i> Grabar Denuncia
                    </button>
                </div>
            </div>
        {!! Form::close() !!}

        <!-- Update Denuncia Form -->
        <form action="{{ url('denuncia') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Denuncia fields -->
            <div class="form-group">
                <label for="denuncia-name" class="col-sm-3 control-label">Titulo</label>
                <div class="col-sm-6">
                  <input type="text" name="name" id="denuncia-name" value="{{ $denuncia->name }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="denunciante-dni" class="col-sm-3 control-label">DNI</label>
                <div class="col-sm-6">
                    <input type="text" name="denunciante_dni" id="denunciante-dni" value="{{ $denuncia->denunciante_dni }}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="denunciante-nombres" class="col-sm-3 control-label">Nombres</label>
                <div class="col-sm-6">
                  <input type="text" name="denunciante_nombres" id="denunciante-nombres" value="{{ $denuncia->denunciante_nombres }}" class="form-control">
                </div>
            </div>
            <input type="hidden" name="id" id="denuncia-id" value="{{ $denuncia->id }}" class="form-control">

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
