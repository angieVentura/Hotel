<?php
try {
    // Configuración de la conexión PDO
    $dsn = "sqlsrv:Server=TAMARA\SQLEXPRESS02;Database=tpBD";
    $usuario = "";
    $contrasena = "root";
    define('CANT_REG_PAG', 2);
    // Crear la conexión PDO
    $conn = new PDO($dsn, $usuario, $contrasena);

    // Configurar PDO para mostrar errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}