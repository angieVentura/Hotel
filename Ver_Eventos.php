<?php
require_once("config.php");

$sql = "SELECT * FROM dbo.Eventos_Especiales";
$stmt = $conn->query($sql);
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$view = "Ver_Eventos";
require_once("views/layout.php");
?>