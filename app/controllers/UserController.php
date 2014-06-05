<?php

class UserController extends BaseController {

	

	public function get_formulario()
	{
		return View::make('formulario');
	}


	public function post_formulario()
	{
			$reglas =  array(
					'user'  => array('required', 'min:8'),
					'password'=>'required',
					'passwordRE'=>array('required'),
					'email'=>array('required','email'),
					'nombre'=>'required',
					'apellidos'=>'required',
					'telefono'=>'required'

					);
				$validator = Validator::make(Input::all(), $reglas);
					if ( $validator->fails() ){
						return Redirect::to('/formulario')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validator)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
   			 }else{

		
					$usuario=new Usuario;
						$usuario->user=Input::get('user');
						$usuario->password=Input::get('password');
						$usuario->email=Input::get('email');
						$usuario->nombre=Input::get('nombre');
						$usuario->apellidos=Input::get('apellidos');
						$usuario->telefono=Input::get('telefono');

						$usuario->save();
						return View::make('formulario');
				}	
    }
}
