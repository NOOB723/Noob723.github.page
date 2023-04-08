<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: formulario.php');
} else {
  header('Location: index.html');
  exit();
}
?>