<!DOCTYPE html>
<html>
<head>
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
  <h1>Inicio de Sesión</h1>
  <form action="procesar_login.php" method="post"> 
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Iniciar Sesión">
  </form>
</body>
</html>
