<?php
try {

    $dsn = "sqlsrv:Server=ANGIE\SQLEXPRESS;Database=tpBD";
    $usuario = "";
    $contrasena = "root";

    define('CANT_REG_PAG', 2);

    $conn = new PDO($dsn, $usuario, $contrasena);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
