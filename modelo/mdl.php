<?php

class Mdl_Modelo extends Modelo{

	public function saludo(){
		$res=$this->query('SELECT * FROM imagen');
		return mysql_fetch_assoc($res);
	}
	
}
