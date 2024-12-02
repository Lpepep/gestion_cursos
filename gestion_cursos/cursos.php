<?php
include 'includes/conexion.php';

// Obtener el ID del curso de la URL (ej: cursos.php?id=1)
$id_curso = $_GET['id'];

// Consulta SQL para obtener los datos del curso
$sql = "SELECT * FROM Cursos WHERE id_curso = $id_curso";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  // Mostrar los datos del curso (nombre, descripción, etc.)
  echo "<h1>" . $row['nombre'] . "</h1>";
  echo "<p>" . $row['descripcion'] . "</p>";

  // Formulario de inscripción (puedes usar el código del formulario 'inscripcion.html' que te di antes)
  // ... 
} else {
  echo "Curso no encontrado.";
}

$conn->close();
?>
