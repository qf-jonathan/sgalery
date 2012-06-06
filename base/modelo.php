<?php

class Modelo{

	private static $enlace=NULL;
	
	public function __construct(){
		if(self::$enlace===NULL){
			include 'configuracion.php';
			self::$enlace=mysql_connect(
				$database['dbhost'],
				$database['dbuser'],
				$database['dbpass']
			);
			mysql_select_db($database['dbname'],self::$enlace);
		}
	}
	
	public function query($sql){
		return mysql_query($sql,self::$enlace);
	}

}
