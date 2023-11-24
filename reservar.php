<?php
require_once "config.php";
require_once "session_start.php";
$_SESSION['Email'];

$consulta = $conn->prepare("SELECT MAX(ReservacionID) as numero FROM Reservaciones");
$consulta->execute();

$id_max = $consulta->fetch(PDO::FETCH_ASSOC);

$consulta = $conn->prepare("SELECT ClienteID FROM Clientes WHERE Email = '" . $_SESSION['Email'] . "'");
$consulta->execute();

$id_cliente = $consulta->fetch(PDO::FETCH_ASSOC);

$consulta = $conn->prepare("SELECT ID FROM Habitaciones WHERE Numero = " . $_POST['numero']);
$consulta->execute();

$hab_id = $consulta->fetch(PDO::FETCH_ASSOC);
$comi = $_POST["comienzo"];
$fin = $_POST["final"];

$consulta = $conn->prepare("INSERT INTO Reservaciones(ReservacionID, ClienteID, HabitacionID, FechaInicio, FechaFin) VALUES(" . $id_max['numero']+1 . "," . $id_cliente['ClienteID'] . "," . $hab_id['ID'] . ", '" . $comi . "', '" . $fin . "')");
$consulta->execute();
require_once("index.php");
exit();