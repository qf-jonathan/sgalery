<?php

class Mdl_Modelo extends Modelo{

	public function saludo(){
		$res=$this->query('SELECT * FROM imagenes');
		return mysql_fetch_assoc($res);
	}
	
}
