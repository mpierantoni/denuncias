@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Denuncia Form -->
        <form action="{{ url('denuncia') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Denuncia Name -->
            <div class="form-group">
                <label for="denuncia-name" class="col-sm-3 control-label">Denuncia</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="denuncia-name" class="form-control">
                </div>
            </div>

            <!-- Add Denuncia Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Denuncia
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Denuncias -->
@endsection
