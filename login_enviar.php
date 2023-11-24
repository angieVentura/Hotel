<?php
require_once "config.php";
$correo = $_POST["correo"];
$password = $_POST["password"];

try {
    $consulta = $conn->prepare("SELECT * FROM Clientes WHERE Email = '$correo'");
    $consulta->execute();

    // Obtener el resultado como un array asociativo
    $result = $consulta->fetch(PDO::FETCH_ASSOC);
   
    if ($result['Email'] == $correo && $result['Contrasenia'] == $password) {
        //inicio de sesion conseguido, no recuerdo que hacer aca
        session_start();
        $_SESSION['ID'] = $result['ID'];
        $_SESSION['Nombre'] = $result['Nombre'];
        $_SESSION['Email'] = $result['Email'];
        $_SESSION['Telefono'] = $result['Telefono'];
        $_SESSION['Direccion'] = $result['Direccion'];
        require_once("index.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}