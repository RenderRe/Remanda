<?php
  include '../php/connecting.php';

  $sql = "SELECT * FROM Catalog LIMIT 3";
  $result = mysqli_query($conn, $sql);
  $products = array();
  while ($row = mysqli_fetch_assoc($result)){
    $products[] = $row;
  }
  mysqli_close($conn);
?>
  <!DOCTYPE html>
    <html lang="ru">
      <head>
        <meta charset="UTF-8">
          <title>HF Принтеры</title>
          <link rel="icon" href="/img/HF.png">
          <link rel="stylesheet" href="/css/stele.css">
          <link rel="stylesheet" type="text/css" href="/css/preloders.css">
          <link rel="stylesheet" href="/css/page_print.css">
        </meta>
      </head>
      <body>
      <div id="page-preloader" class="preloder">
            <div class="loader">

            </div>
        </div>
        <header>
          <div class="logo">
            <h1><img src="/img/HF.png" alt="HF Принтеры">HF Принтеры</h1>
          </div>
          <nav class="Shapka">
            <ul>
              <li><a href="page.php">Главная</a></li>
              <li><a href="katalog.php">Каталог</a></li>
              <li><a href="indormation.html">О нас</a></li>
              <li><a href="kontact.php">Контакты</a></li>
            </ul>
          </nav>
        </header> 
      <main>

        </main>
        <footer style="background-color: black; color: white; padding: 30px 0;">
          <div style="display: flex; justify-content: space-around;">
            <div style="width: 30%;">
              <h3>Компания</h3>
              <ul>
                <li><a href="katalog.html">Каталог</a></li>
                <li><a href="indormation.html">О нас</a></li>
                <li><a href="kontact.html">Контакты</a></li>
              </ul>
            </div>
          <div style="width: 30%;">
            <div>
              <h3>Следите за нами</h3>
              <ul>
                <li><img src="/img/VK.png" alt="Иконка ВК"><a href="https://vk.com/feed">VK</a></li>
                <li><img src="/img/ТГ.png" alt="Иконка Телеграм"><a href="https://web.tlgrm.app/">Телеграм</a></li>
              </ul>
            </div>
          </div>
        </footer>
        <script src="/js/preloder.js"></script>
      </body>
    </html>
