@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nueva Denuncia
            </div>

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Denuncia Form -->
        <form action="{{ url('wizard') }}" method="GET" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Tomar Denuncia Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Tomar Denuncia
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>

        <!-- Denuncias existentes -->
    @if (count($denuncias) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Denuncias Existentes
            </div>

            <div class="panel-body">
                <table class="table table-striped denuncia-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Denuncia</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($denuncias as $denuncia)
                            <tr>
                                <!-- Denuncia Name -->
                                <td class="table-text">
                                    <div>
                                      <a href="{{ url('denuncia/'.$denuncia->id) }}">
                                        {{ $denuncia->name }}
                                      </a>
                                    </div>
                                </td>

                                <td>
                                    <form action="{{ url('denuncia/'.$denuncia->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-denuncia-{{ $denuncia->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
  </div>
</div>
@endsection
