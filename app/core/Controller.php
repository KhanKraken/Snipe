<?php

/**
* 
*/
class Controller
{	
	protected function view($view,$data = [])
	{			
		extract($data, EXTR_PREFIX_SAME, "wddx");
		require_once Config::path('app').'/views/'.$view.'.php';
	}
}