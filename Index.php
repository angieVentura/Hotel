<?php
require_once("config.php");
if (!isset($_SESSION)){
    require_once("sesion.php");
}
$view = "home";

$query = "SELECT Habitaciones.ID, Numero, Precio, Nombre from Habitaciones INNER JOIN Tipo_Habitaciones ON Habitaciones.TipoHabitacionID = Tipo_Habitaciones.ID";
$result = $conn->query($query);

if ($result === false) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$habitaciones = $result->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT * from Salones";
$result = $conn->query($query);

if ($result === false) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$salones = $result->fetchAll(PDO::FETCH_ASSOC);


require_once("views/layout.php");
