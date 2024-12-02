<?php
  // Aquí puedes mostrar un listado de cursos disponibles con una breve descripción
  // o un mensaje de bienvenida si el usuario no ha iniciado sesión

  include 'includes/conexion.php'; 

  $sql = "SELECT * FROM Cursos";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<h1>Lista de Cursos</h1>";
    while($row = $result->fetch_assoc()) {
      echo "<a href='cursos.php?id=" . $row["id_curso"] . "'>" . $row["nombre"] . "</a><br>";
      echo "<p>" . $row["descripcion"] . "</p><br>";
    }
  } else {
    echo "No hay cursos disponibles.";
  }
  $conn->close();
?>
