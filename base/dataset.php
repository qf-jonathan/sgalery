<?php

class Dataset {

	private $_dataset = NULL;

	public function __construct(&$dataset) {
		$this->_dataset = &$dataset;
	}

	public function jalar_fila() {
		return mysql_fetch_assoc($this->_dataset);
	}

	public function jalar_fila_objeto() {
		return mysql_fetch_object($this->_dataset);
	}

	public function &como_array() {
		$res = array();
		while ($fila = mysql_fetch_assoc($this->_dataset))
			$res[] = $fila;
		return $res;
	}

}