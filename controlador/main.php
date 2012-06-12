<?php

class Main_Controlador extends Controlador{

	public function __construct(){
		//$this->cargar_modelo('mdl');
	}

	public function index_accion(){
		//$res=$this->mdl->saludo();
		//$this->cargar_vista('principal',$res);
		//sleep(2);
		$this->json(array('msg'=>$_POST['prueba'].' '));
	}
	
	public function shen_accion(){
		$datos['nombre']='yoel';
		$datos['apellido']='pinto';
		$this->cargar_vista('otro',$datos);
		//$this->cargar_vista('otro',$datos);
	}
	
	public function ver_imagen_action(){
		
	}
	public function prueba_accion(){
		sleep(2);
		echo "hola";
	}
}
