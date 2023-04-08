<?php
    session_start();

    $usuario = $_SESSION['username'];
    $completo = $_SESSION['nombcomp'];
    $edad = $_SESSION['edad'];
    $correo = $_SESSION['correo'];
    $ocupacion = $_SESSION['ocupacion'];
    $genero = $_SESSION['genero'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    <style>
        img {
            width: 70px;
            height: 70px;
            float: left;
            margin-right: 20px;
        }
    </style>
  </head>
  <body>
    <img src="Prueba.PNG" alt="Foto de Perfil">
    <h1>
      <?php
      echo "Te damos la bienvenida $usuario" . "<br>";
      echo "<p>Nombre completo: $completo</p>";
      echo "<p>Correo electrónico: $correo</p>";
      echo "<p>Edad: $edad</p>";
      echo "<p>Ocupación: $ocupacion</p>";
      echo "<p>Género: $genero</p>";
      ?>
    </h1>
    <br>
    <p>Biografía del usuario</p>
    <p>Ubicación: Ciudad, País</p>
    <ul>
      <li><a href="https://www.facebook.com/usuario">Facebook</a></li>
      <li><a href="https://www.twitter.com/usuario">Twitter</a></li>
      <li><a href="https://www.instagram.com/usuario">Instagram</a></li>
    </ul>
  </body>
</html>