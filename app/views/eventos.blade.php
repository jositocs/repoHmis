<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eventos</title>

        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    </head>
    <body>
        <div class="container">
            @if($errors->has())
              <div class="col-md-6 col-md-offset-3 text-center" > <div class="alert alert-danger">Los datos son incorrectos</div></div>
            @endif
            {{ Form::open(array('url' => 'eventos', 'class'=>'col-md-6 col-md-offset-3')) }}
                <div class="form-group">
                    <h1> Inserción de eventos </h1>
                <br>
                {{ Form::label('nombre', 'Nombre del evento') }}
                {{ Form::text('nombre', null, array('class'=>'form-control', 'placeholder="Nombre del evento"')); }}

                {{ Form::label('fecha', 'fecha') }}
                {{ Form::text('fecha', null, array('class'=>'form-control', 'placeholder="Fecha del evento"')); }}

                {{ Form::label('hora', 'Hora') }}
                {{ Form::text('hora', null, array('class'=>'form-control', 'placeholder="Hora del evento"')); }}

                {{ Form::label('aforo', 'Aforo') }}
                {{ Form::text('aforo', null, array('class'=>'form-control', 'placeholder="Aforo del evento"')); }}

                {{ Form::label('descripcion', 'Descripcion') }}
                {{ Form::textarea('descripcion', null, array('class'=>'form-control', 'placeholder="Descripcion del evento"')); }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Guardar evento', array('class'=>'btn btn-success')) }}
                     <a href="./logout" class="btn btn-danger"> Cancelar </a>
                </div>
            {{ Form::close() }}
        </div>
    </body>
</html>