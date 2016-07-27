<h1>Tipo de Toma de Denuncia</h1>

@include('errors.list')

{!! Form::model($survey) !!}
    {!! Form::label('name', 'What is your name?') !!}<br>
    {!! Form::text('name') !!}<br>
    <button type="submit">Submit</button>
{!! Form::close() !!}
