<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Galería de Imágenes</title>
		<link rel="stylesheet" type="text/css" href="recursos/estilos.css">
		<script type="text/javascript" src="recursos/fnc.js"></script>
    </head>
    <body>
		<div id="cabesera">
			<div id="titulo">Galería de Imágenes</div>
		</div>
		<div id="contenedor">
			
		</div>
		<div id="pie">
			<div id="navegador">
				<div id="imagenes">
					<?php for($i=0; $i<100;$i++):?>
					<div style="display: table-cell; padding:10px; border: solid 1px red; height: 124px; width: 124px;">---------------------</div>
					<?php endfor; ?>
				</div>
			</div>
			<div id="subir">
				<form action="index.php?c=galeria&a=guardar_imagen" method="post">
					<input type="file"/>
				</form>
			</div>
		</div>
    </body>
</html>
