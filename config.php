<?php
try {
    $dsn = "sqlsrv:Server=DESKTOP-3KQCNSN\SQLEXPRESS;Database=tpBD";
    $usuario = "";
    $contrasena = "root";

    // Crear la conexión PDO
    $conn = new PDO($dsn, $usuario, $contrasena);

    // Configurar PDO para mostrar errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
 ?>

