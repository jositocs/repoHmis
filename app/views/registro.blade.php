<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    </head>
    <body>
        <div class="container">
            @if($errors->has())
              <div class="col-md-6 col-md-offset-3 text-center" > <div class="alert alert-danger">Los datos son incorrectos</div></div>
            @endif
            {{ Form::open(array('url' => '/registro', 'class'=>'col-md-6 col-md-offset-3')) }}
                <div class="form-group">
                {{ Form::label('user', 'Nombre de usuario') }}
                {{ Form::text('user', null, array('class'=>'form-control')); }}

                {{ Form::label('contraseña', 'Contraseña') }}
                {{ Form::password('password', array('class'=>'form-control')); }}

                {{ Form::label('email', 'direccion email') }}
                {{ Form::text('email', null, array('class'=>'form-control')); }}

                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', null, array('class'=>'form-control')); }}

                {{ Form::label('apellidos', 'Apellidos') }}
                {{ Form::text('apellidos', null, array('class'=>'form-control')); }}

                {{ Form::label('telefono', 'Telefono') }}
                {{ Form::text('telefono', null, array('class'=>'form-control')); }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Enviar', array('class'=>'btn btn-primary')) }}
                </div>
            {{ Form::close() }}
        </div>
    </body>
</html>