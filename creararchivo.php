<?php

$file= fopen('practica1.txt', 'a+') or die("error al intentar crear el archivo");

$asunto= $_REQUEST['asunto'];
$contenido= $_REQUEST['contenido'];

fwrite($file, $asunto);
fwrite($file, "\n");
fwrite($file, $contenido);

echo "su archivo fue creado satisfactoriamente";

fclose($file);

?> 