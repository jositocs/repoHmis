<?php
class AuthController extends BaseController {
  
 

 public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }

public function postLogin()
    {
        // Guardamos en un array los datos del usuario.
        $userdata = array(
            'user' => Input::get('user'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata))
        {
              if ($userdata['user'] == 'administrador'){
           
            return Redirect::to('eventos');
            }
            else{
                return Redirect::to('/');
            }
        }    

            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('login')
                ->withErrors($userdata)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
        
    }

public function logout()
{
   if (Auth::check())
    {
        Auth::logout();
    }
    return Redirect::to('/login');
}



}