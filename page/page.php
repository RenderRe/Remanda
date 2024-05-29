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
          <link rel="stylesheet" type="text/css" href="/css/them.css">
        </meta>
      </head>
      <body>
        <div id="page-preloader" class="preloder">
            <div class="loader">

            </div>
        </div>
        <header>
          <div class="logo">
            <h1><img class="imglogo" src="/img/HF.png" alt="HF Принтеры">HF Принтеры</h1>
            <button class="theme-toggle-button" id="theme-toggle">Сменить тему</button>
            <button id="login-button">Войти</button>
          </div>
          <nav class="Shapka">
            <ul>
              <li><a href="page.php" class="nav-button">Главная</a></li>
              <li><a href="katalog.php" class="nav-button">Каталог</a></li>
              <li><a href="indormation.html" class="nav-button">О нас</a></li>
              <li><a href="kontact.html" class="nav-button">Контакты</a></li>
            </ul>
          </nav>
        </header>
        <main style="background: white; ">
          <h2>Лучшие продаваемые принтеры</h2>
          <div>  
            <div id="products">
              <?php foreach ($products as $product) {?>
                <div class="product">
                  <h2><?php echo $product['name'];?></h2>
                  <img src = <?php echo $product['img']; ?> >
                  <span class="price"><?php echo $product['price'];?>₽</span>
                  <a class="buy-button add-to-cart-button">Купить</a>
                </div>
                <?php }?>
              </div>
            </main>
          </div>
            <script src="/js/preloder.js"></script>
      <footer>
        <div style="display: flex; justify-content: space-around;">
          <div style="width: 30%;">
            <h3>Компания</h3>
            <ul>
              <li><a href="katalog.php">Каталог</a></li>
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
      <script src="/js/them.js"></script>
    </body>
</html>
