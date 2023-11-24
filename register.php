<?php
require_once("config.php");

$mensajeError = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $numero = $_POST["Numero"];
    $dirrecion = $_POST["Direccion"];
    $pass = $_POST["Pass"];
    $pass2 = $_POST["Pass2"];

    if (!empty($pass) && !empty($pass2) && $pass != $pass2) {
        $mensajeError = "Las contraseñas no coinciden";
    } else {
        try {
            // Configurar la consulta SQL para insertar los datos
            $sql = "INSERT INTO dbo.Clientes (Nombre, Email, Telefono, Direccion, Contrasenia) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Ejecutar la consulta con los parámetros
            $stmt->execute([$nombre, $correo, $numero, $dirrecion, $pass]);

            header("Location: register.php"); 
            exit();

        } catch (PDOException $e) {
            die("Error al insertar datos: " . $e->getMessage());
        }
    }
}

$view = "register";
require_once("views/layout.php");
?>

