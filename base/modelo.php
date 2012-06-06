<?php

class Modelo{

	private static $enlace=NULL;
	
	public function __construct(){
		if(self::$enlace===NULL){
			include 'configuracion/configuracion.php';
			self::$enlace=mysql_connect(
				$database['dbhost'],
				$database['dbuser'],
				$database['dbpass']
			);
			mysql_select_db($database['dbname'],self::$enlace);
		}
	}
	
	public function query($sql){
		$resultado = mysql_query($sql,self::$enlace);
		return new Dataset($resultado);
	}
	
	public static function ultimo_id(){
		return mysql_insert_id(self::$enlace);
	}

}
