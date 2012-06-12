<?php

class Controlador{

	private static $singleton_modelos=array();
	
	public function __construct() {
		;
	}

	public function post($elemento){
		if(isset($_POST[$elemento]))
			return mysql_escape_string($_POST[$elemento]);
		return FALSE;
	}
	
	public function get($elemento){
		if(isset($_GET[$elemento]))
			return mysql_escape_string($_GET[$elemento]);
		return FALSE;
	}
	
	public function cargar_modelo($modelo){
		if(!isset(self::$singleton_modelos[$modelo])){
			include 'modelo/'.$modelo.'.php';
			$nombre_modelo=ucfirst($modelo).'_Modelo';
			self::$singleton_modelos[$modelo]=new $nombre_modelo;
		}
		$this->$modelo=self::$singleton_modelos[$modelo];
	}
	
	public function cargar_vista($vista,$vars=array()){
		extract($vars);
		include 'vista/'.$vista.'.php';
		
	}
	
	public function json($datos){
		header('Content-Type: application/x-json');
		echo json_encode($datos);
	}
	
}
