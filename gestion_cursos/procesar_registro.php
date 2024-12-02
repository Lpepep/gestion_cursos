<?php
include 'includes/conexion.php';

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"]; // ¡IMPORTANTE! En un sistema real, debes hashear la contraseña por seguridad

// Insertar datos en la base de datos
$sql = "INSERT INTO Estudiantes (nombre, email, password) VALUES ('$nombre', '$email', '$password')"; 

if ($conn->query($sql) === TRUE) {
  echo "Registro realizado con éxito.";
  // Redirigir al usuario a la página de inicio de sesión
  header("Location: login.php"); 
} else {
  echo "Error al registrar al estudiante: " . $conn->error;
}

$conn->close();
?>
