<?php
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Printer";

  // Создание соединения
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Проверка соединения
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>