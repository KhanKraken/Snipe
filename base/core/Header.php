<?php
/**
* Clase para setear algunas Cabeceras de Contenido header
*/
class ClassName extends AnotherClass
{
	public static function allowAccess(){
		header('Access-Control-Allow-Origin: *'); 
	}

	public static function utf8(){
		header('Content-Type: text/html; charset=utf-8');
	}

}