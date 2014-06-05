<?php
class RegistroController extends BaseController {

	public function showForm(){
	// Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('registro');
	}

	public function postRegistro()
	{
		$reglas =  array(
					'user'  => array('required', 'min:8', 'unique:users'),
					'password'=>'required',
					'email'=>array('required','email'),
					'nombre'=>'required',
					'apellidos'=>'required',
					'telefono'=>'required'

					);
				$validator = Validator::make(Input::all(), $reglas);
					if ( $validator->fails() ){
						return Redirect::to('/registro')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validator)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
   			 }else{

		
					$usuario=new User;
						$usuario->user=Input::get('user');
						$usuario->password=Hash::make(Input::get('password'));
						$usuario->email=Input::get('email');
						$usuario->nombre=Input::get('nombre');
						$usuario->apellidos=Input::get('apellidos');
						$usuario->telefono=Input::get('telefono');

						$usuario->save();
						return Redirect::to('/login');
				}
	}

}