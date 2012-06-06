<?php

include 'base/controlador.php';
include 'base/dataset.php';
include 'base/modelo.php';

$controlador = isset($_GET['c'])?$_GET['c']:'galeria';
$accion = isset($_GET['a'])?$_GET['a']:'index';

include 'controlador/'.$controlador.'.php';

$nombre_controlador=ucfirst($controlador).'_Controlador';
$nombre_accion=$accion.'_accion';

$app=new $nombre_controlador;
$app->$nombre_accion();

//gggggg
