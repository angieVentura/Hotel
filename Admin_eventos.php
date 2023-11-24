<?php
// Conexión a la base de datos
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_fin = $_POST["fecha_fin"];

    $imagen = $_FILES["imagen"];
    $imagen_nombre = $imagen["name"];
    $imagen_temporal = $imagen["tmp_name"];
    $imagen_tipo = $imagen["type"];

    $permitidos = array("image/jpg", "image/jpeg", "image/png");
    if (in_array($imagen_tipo, $permitidos)) {
        $ruta_imagen = "images/" . $imagen_nombre;
        move_uploaded_file($imagen_temporal, $ruta_imagen);

        try {
            $sql = "INSERT INTO dbo.Eventos_Especiales (Nombre, FechaInicio, FechaFin, Imagen, Descripcion)
            VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$titulo, $fecha_inicio, $fecha_fin, $ruta_imagen, $descripcion]);

            header("Location: Ver_Eventos.php");
            exit();
            // echo "Evento subido exitosamente";
        } catch (PDOException $e) {
            die("Error al subir el evento: " . $e->getMessage());
        }
    } else {
        echo "Formato de imagen no permitido. Por favor, sube una imagen en formato JPG, JPEG o PNG.";
    }
}

$view = "Admin_eventos";
require_once("views/layout.php");
?>
