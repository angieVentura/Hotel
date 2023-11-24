<?php
require_once("config.php");
$view = "tablaAlComida";

$query = "SELECT COUNT(Nombre) as cant, Nombre FROM Comidas GROUP BY Nombre";
$result = $conn->query($query);

if (!$result) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$comidas=['Canelones','Milanesa','Bondiola','Matambre a la pizza','Pizza'];
$comida = $result->fetchAll(PDO::FETCH_ASSOC);

require_once("views/layout.php");