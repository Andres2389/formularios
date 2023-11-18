
<?php
require 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$precio = $_POST["precio"];
$disponible = $_POST["disponible"];

// Insertar datos en la base de datos
$sql = "INSERT INTO libreria (nombre, autor, precio, disponible) VALUES ('$nombre', '$autor', '$precio', '$disponible')";

if ($conn->query($sql) === TRUE) {
    header("Location: mostrar.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
