<?php
    session_start();

    if (isset($_POST['nombcomp'])) {
        $_SESSION['nombcomp'] = $_POST['nombcomp'];
    }
    
    if (isset($_POST['edad'])) {
        $_SESSION['edad'] = $_POST['edad'];
    }
    
    if (isset($_POST['correo'])) {
        $_SESSION['correo'] = $_POST['correo'];
    }
    
    if (isset($_POST['ocupacion'])) {
        $_SESSION['ocupacion'] = $_POST['ocupacion'];
    }
    
    if (isset($_POST['genero'])) {
        $_SESSION['genero'] = $_POST['genero'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="login-container">
        <h1>FORMULARIO DE CREACIÓN DE PERFIL</h1>
        <form action="PaginaPrincipal.php" method="POST">
            <div class="input-group">
                <label for="nombcomp">NOMBRE COMPLETO:</label>
                <input type="text" name="nombcompleto">
                <label for="edad">EDAD:</label>
                <input type="number" name="edad">
                <label for="correo">CORREO ELECTRÓNICO:</label>
                <input type="email" name="correo" >
                <label for="ocupacion">OCUPACIÓN:</label>
                <input type="text" name="ocupacion">
                <label for="genero">GÉNERO:</label>
                <select name="genero">
                  <option value="femenino">Femenino</option>
                  <option value="masculino">Masculino</option>
                  <option value="no decirlo">Prefiero no decirlo</option>
                </select>
            </div>
            <div class="submit">
                <input type="submit" value="CREAR" id="boton-login">
            </div>
        </form>
    </div>
</html>