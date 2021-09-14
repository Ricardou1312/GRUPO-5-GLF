<?php

//  error_log PRUEBA

// Variable texto a salvar

$var = "PRUEBA MENSAJE DE ERROR";

// Dirección del fichero de log que queremos

$path = "log.log";

// Obtengo fecha y hora

$date = date('m-d-Y h:i:s a', time());

// Uso de funcion error_log guardando fecha y hora

error_log($var. "\n", 3, $path);
error_log($date. "\n", 3, $path);



?>


