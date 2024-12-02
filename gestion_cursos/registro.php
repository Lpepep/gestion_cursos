<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuario</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
  <h1>Formulario de Registro</h1>
  <form action="procesar_registro.php" method="post"> 
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Registrarse">
  </form>
</body>
</html>
