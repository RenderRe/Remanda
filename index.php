<?php
    include 'php/connecting.php'; 
    ?>
<!DOCTYPE html>
  <html lang="ru">
    <head>
        <meta charset="UTF-8">
          <title>HF Принтеры</title>
          <link rel="icon" href="img/HF.png">
          <link rel="stylesheet" type="text/css" href="css/Login.css">
          <link rel="stylesheet" type="text/css" href="css/text.css">
          <link rel="stylesheet" type="text/css" href="/css/them.css">
        </meta>
      </head>
      <body>
        <button class="theme-toggle-button" id="theme-toggle">Сменить тему</button>
        <form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="typing-text" id="typing-text"></div>
            <script src="js/Text.js"></script>
            <label for="username">Логин:</label>
            <input type="username" id="username" name="username" required><br>

            <label for="password">Пороль:</label>
            <input type="password" id="password" name="password" autocomplete="on" required><br>

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
        <script src="/js/them.js"></script>
      </body>
  </html>