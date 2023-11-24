<?php
require_once("config.php");
require_once("sesion.php") ;
$view = "tablaUsu";

$query = "SELECT Nombre, Email from Clientes";
$result = $conn->query($query);

if (!$result) {
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$usuarios = $result->fetchAll(PDO::FETCH_ASSOC);
$numRows = 0;
foreach($usuarios as $usu){
    $numRows=$numRows+1;
}

$pag = (isset($_GET['pag']) ? $_GET['pag'] : 1);

$desde = CANT_REG_PAG * ($pag - 1);

$por_pag = CANT_REG_PAG;

$query2 = "SELECT Nombre, Email FROM (SELECT Nombre, Email, ROW_NUMBER() OVER (ORDER BY Nombre) AS RowNum FROM Clientes) AS SubQuery WHERE RowNum BETWEEN $desde + 1 AND $desde + $por_pag";
$result2 = $conn->query($query2);
if(!$result2){
    throw new Exception("Error en la consulta: " . implode(", ", $conn->errorInfo()));
}

$usuarios2 = $result2->fetchAll(PDO::FETCH_ASSOC);
$cant_pag = ceil($numRows/CANT_REG_PAG);

require_once("views/layout.php");