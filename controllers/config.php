<?php
 $serverName = "tu_servidor";
 $connectionOptions = array(
     "Database" => "tpBD",
     "Uid" => "hotel",
     "PWD" => "123"
 );
 
 $conn = sqlsrv_connect($serverName, $connectionOptions);
 
 if (!$conn) {
     die("Error de conexión: " . sqlsrv_errors());
 }

 ?>