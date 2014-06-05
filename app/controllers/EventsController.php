<?php

class EventsController extends BaseController {

	

	public function showForms(){
	// Verificamos que el usuario no esté autenticado
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('eventos');
	}


	public function postEvento()
	{

					
						$evento=new Evento;
						$evento->user=Input::get('user');
						$evento->password=Input::get('password');
						$evento->email=Input::get('email');
						$evento->nombre=Input::get('nombre');
						$evento->apellidos=Input::get('apellidos');
						

						$evento->save();
						return View::make('admin');
					
    }
}
