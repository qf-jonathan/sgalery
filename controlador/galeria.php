<?php

class Galeria_Controlador extends Controlador {

	public function __construct() {
		//header('Content-Type: application/x-json');
	}
	
	public function index_accion(){
		//$this->json(array('prueba'=>'dato'));
		$this->cargar_vista('galeria');
	}
	
	public function guardar_imagen_accion(){
		
	}

}