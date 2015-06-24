<!DOCTYPE html>
<html>
    <head>
        <title>Imprimir códigos de barras</title>
    </head>
    <body>
    {!! Form::open(['route'=>'generatePdf', 'method'=>'get', 'target'=>'_blank']) !!}

    <div class="row">
        {!! Form::label('prefix', 'Prefijo:') !!}
        {!! Form::text('prefix') !!}
        {!! $errors->first('prefix', '<strong class="danger">:message</strong>') !!}
        <br/>
    </div>

    <div class="row">
        {!! Form::label('start', 'Iniciar en:') !!}
        {!! Form::text('start', 0) !!}
        {!! $errors->first('start', '<strong class="danger">:message</strong>') !!}
        <br/>
    </div>

    <div class="row">
        {!! Form::label('quantity', 'Cantidad') !!}
        {!! Form::text('quantity', 1) !!}
        {!! $errors->first('quantity', '<strong class="danger">:message</strong>') !!}
        <br/>
    </div>

    {!! Form::submit('Generar PDF') !!}

    {!! Form::close() !!}
    </body>
</html>
