<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <?php
  session_start(); // Inicia la sesión
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesa el formulario de inicio de sesión
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];
    if (!empty($username) && !empty($password)) {
      if ($username == 'Jorge' && $password == '1234') {
        // Iniciar sesión y guardar el nombre de usuario en la variable $_SESSION
        $_SESSION['username'] = $username;
        header('Location: perfil.php'); // Redirigir al usuario a su perfil
        exit();
      } else {
        echo 'Nombre de usuario o contraseña incorrectos.';
      }
    } else {
      echo 'Porfavor ingrese un nombre de usuario y contraseña';
    }
  }
  ?>
</body>
</html>