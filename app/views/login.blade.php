<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    </head>
    <body>
      <div class="container">
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if($errors->has())
              <div class="col-md-6 col-md-offset-3 text-center" > <div class="alert alert-danger">Los datos son incorrectos</div></div>
            @endif
        
        {{ Form::open(array('url' => '/login', 'class'=>"col-md-6 col-md-offset-3")) }}
            <div class="form-group">
            <h1> Login </h1>
        <br>
            {{ Form::label('usuario', 'Nombre de usuario') }}
            {{ Form::text('user', Input::old('user'), array('class'=>'form-control', 'placeholder="Nick minimo 8 caracteres"')); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password', array('class'=>'form-control', 'placeholder="Contraseña "')); }}
            </div>
            <div class="form-group">
            {{ Form::submit('Enviar', array('class'=>'btn btn-primary'));}}
            <a href="./registro" class="btn btn-warning"> Registrarse </a>
            </div>
        {{ Form::close() }}
      </div>
    </body>
</html>