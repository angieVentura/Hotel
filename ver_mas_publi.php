<?php
require_once("config.php");

$ID = $_GET['ID'];

$query = "SELECT * from Habitaciones WHERE ID = $ID";
$result = $conn->query($query);

if ($result === false) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$habitacion = $result->fetch(PDO::FETCH_ASSOC);

$view = "ver_mas_publi";
require_once("views/layout.php");
