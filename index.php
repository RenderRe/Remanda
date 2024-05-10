
<html lang="ru">
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
  <head>
      <meta charset="UTF-8">
        <title>HF Принтеры</title>
        <link rel="icon" href="img/HF.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Beer+Money&display=swap">
        <link rel="stylesheet" type="text/css" href="css/Login.css">
        <link rel="stylesheet" type="text/css" href="css/text.css">
      </meta>
    </head>
    <body>
      <div class="typing-text" id="typing-text"></div>
      <script src="js/Text.js"></script>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="username">Логин:</label>
          <input type="text" id="username" name="username" required><br>

          <label for="password">Пороль:</label>
          <input type="password" id="password" name="password" required><br>

          <button type="submit">Войти
              <?
                          // Проверка соединения
                      if ($_SERVER["REQUEST_METHOD"] == "POST") 
                      {
                          $username = $_POST["username"];
                          $password = $_POST["password"];

                          // SQL запрос для проверки наличия пользователя в базе данных
                          $sql = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
                          $result = mysqli_query($conn, $sql);

                          if (mysqli_num_rows($result) == 1) {

                              header("Location: ../page/page.php");
                          }
                          elseif (mysqli_num_rows($result) == 0) {
                            echo '<script type="text/javascript">';
                            echo 'alert("Логин или пороль введён неправильно попробуйте ещё раз");';
                            echo '</script>';
                            
                          }
                      }
                  ?>
              </button>
      </form>
    </body>
</html>