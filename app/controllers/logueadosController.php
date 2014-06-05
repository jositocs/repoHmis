<?php

class LogueadosController extends BaseController {

	public function get_logueados()
		{	
			
			//$eventos=Evento::all();
							return View::make('logueados');
							//->with('eventos',$eventos);
		}

	public function post_logueados(){
		
		$cine = DB::select('select * from eventos where tipo=?',array(Input::get('tipo')));
		return View::make('logueados', array('eventos' => $cine));
		 
		
	}	


}