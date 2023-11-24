<?php
require_once("config.php");
require_once("sesion.php") ;
$ID = $_SESSION['ID'];

$query = "SELECT HabitacionID, Numero, Precio, Piso, Capacidad, FechaInicio, FechaFin from Reservaciones INNER JOIN Clientes ON Reservaciones.ClienteID = Clientes.ID INNER JOIN Habitaciones ON Reservaciones.HabitacionID = Habitaciones.ID where Reservaciones.ClienteID = $ID";
$result = $conn->query($query);

if ($result === false) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$reservas = $result->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["Nombre"])) {
    $nombre = $_POST["Nombre"];


    $query = "UPDATE Clientes SET Nombre = :nombre WHERE ID = :id";
    $statement = $conn->prepare($query);


    $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $statement->bindParam(':id', $ID, PDO::PARAM_INT);


    if ($statement->execute() === false) {
        throw new Exception("Error en la consulta: " . implode(", ", $statement->errorInfo()));
    }

    $_SESSION['Nombre'] = $nombre;
}

if (isset($_POST["Email"])) {
    $Email = $_POST["Email"];
    $query = "UPDATE Clientes SET Email = :Email WHERE ID = :ID";
    $statement = $conn->prepare($query);
    $statement->bindParam(':Email', $Email, PDO::PARAM_STR);
    $statement->bindParam(':ID', $ID, PDO::PARAM_INT);

    if ($statement->execute() === false) {
        throw new Exception("Error en la consulta: " . implode(", ", $statement->errorInfo()));
    }

    $_SESSION['Email'] = $Email;
}

if(isset($_POST["Telefono"])){
    $Telefono = $_POST["Telefono"];
    $query = "UPDATE Clientes SET Telefono = :Telefono WHERE ID = :ID";
    $statement = $conn->prepare($query);
    $statement->bindParam(':Telefono', $Telefono, PDO::PARAM_STR);
    $statement->bindParam(':ID', $ID, PDO::PARAM_INT);

    if ($statement->execute() === false) {
        throw new Exception("Error en la consulta: " . implode(", ", $statement->errorInfo()));
    }

    $_SESSION['Telefono'] = $Telefono;
}

if(isset($_POST["Direccion"])){
    $Direccion = $_POST["Direccion"];
    $query = "UPDATE Clientes SET Direccion = :Direccion WHERE ID = :ID";
    $statement = $conn->prepare($query);
    $statement->bindParam(':Direccion', $Direccion, PDO::PARAM_STR);
    $statement->bindParam(':ID', $ID, PDO::PARAM_INT);

    if ($statement->execute() === false) {
        throw new Exception("Error en la consulta: " . implode(", ", $statement->errorInfo()));
    }

    $_SESSION['Direccion'] = $Direccion;
}

if(isset($_POST["pass"]) && isset($_POST["passRepe"])){
    $newPassword = $_POST["pass"];
    $newPasswordRepe = $_POST["passRepe"];

   
    if ($newPassword === $newPasswordRepe) {

        $query = "UPDATE Clientes SET Contrasenia = :Contrasenia WHERE ID = :ID";
        $statement = $conn->prepare($query);
        $statement->bindParam(':Contrasenia', $newPassword, PDO::PARAM_STR);
        $statement->bindParam(':ID', $ID, PDO::PARAM_INT);

        if ($statement->execute() === false) {
            throw new Exception("Error en la consulta: " . implode(", ", $statement->errorInfo()));
        }
    } else {

        echo "Las contraseñas no coinciden.";
    }
}

$view = "perfil";
require_once("views/layout.php");
