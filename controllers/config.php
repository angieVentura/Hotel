<?php
 
 class Conexion{ 

    function ConexionBD(){
        $host = 'localhost';
        $bdname = 'Hotel';
        $username = '';
        $password = "root";
        $puerto = 1433;

        try{
            $conn = new PDO ("sqlsrv:Server=$host, $puerto;Database=$bdname", $username, $password);
            echo "Se conectó esta mierda";
        }
        catch(PDOException $exp){
            echo "No se conectó esta mierda: error", $exp;
        }

        return $conn;

    }

 }

 ?>