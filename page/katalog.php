<?php 
include '../php/connecting.php'; 

$sql = "SELECT * FROM `Catalog`";
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
        <title>Каталог</title>
        <link rel="icon" href="/img/HF.png">
        <link rel="stylesheet" type="text/css" href="/css/stele.css">
        <link rel="stylesheet" type="text/css" href="/css/preloders.css">
        <link rel="stylesheet" type="text/css" href="/css/katalog.css">
        <link rel="stylesheet" type="text/css" href="/css/them.css">
        
    </head> 
        <body>
          <div id="page-preloader" class="preloder">
            <div class="loader">
            </div>
          </div>
            <header>
                <div class="logo">
                  <h1><img class="imglogo" src="/img/HF.png" alt="HF Принтеры">Каталог</h1>
                  <button class="theme-toggle-button" id="theme-toggle">Сменить тему</button>
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
                  <main>
                    <div class="header">
                      <div class ="kon_katalog">
                        <div class = "serch">
                            
                            <input type="text" id="search-box" placeholder="Поиск по каталогу">
                            <button id="search-button">Поиск</button>
                            <!-- Скрипт поиска -->
                              <script>
                                const products = <?php echo json_encode($products); ?>;

                                document.getElementById('search-button').addEventListener('click', function() {
                                  const searchBox = document.getElementById('search-box');
                                  const searchQuery = searchBox.value.trim();

                                  const filteredProducts = filterProducts(products, searchQuery);

                                  const productsList = document.getElementById('products');
                                  productsList.innerHTML = '';

                                  filteredProducts.forEach(product=> {
                                    const productHTML = `
                                      <div class="product">
                                        <h2>${product.name}</h2>
                                        <a href=""basket.php">  
                                          <img src = ${product.img} >
                                        </a>
                                        <span class="price">${product.price}₽</span>
                                        <a class="buy-button add-to-cart-button">Купить</a>
                                        </div>
                                        `;
                                        productsList.innerHTML += productHTML;
                                      });
                                    });
                                    document.getElementById('search-box').addEventListener('keydown', function(event) {
                                      if (event.key === 'Enter') {
                                        event.preventDefault();
                                        const searchBox = document.getElementById('search-box');
                                        const searchQuery = searchBox.value.trim();
                                        
                                        const filteredProducts = filterProducts(products, searchQuery);
                                        
                                        const productsList = document.getElementById('products');
                                        productsList.innerHTML = '';
                                        
                                        filteredProducts.forEach(product=> {
                                          const productHTML = `
                                          <div class="product">
                                          <h2>${product.name}</h2>
                                          <a href=""basket.php">  
                                          <img src = ${product.img} >
                                          </a>
                                          <span class="price">${product.price}₽</span>
                                          <a class="buy-button add-to-cart-button">Купить</a>
                                          </div>
                                          `;
                                          productsList.innerHTML += productHTML;
                                        });
                                      }
                                    });
                                    function filterProducts(products, query) {
                                      return products.filter(product => product.name.toLowerCase().includes(query.toLowerCase()));
                                    }
                              </script>
                            <!-- -->
                          </div>
                          <div id="products">
                                <?php foreach ($products as $product) {?>
                                    <div class="product">
                                      <h2><?php echo $product['name'];?></h2>
                                      <a href="basket.php">  
                                        <img src="<?php echo $product['img']; ?>">
                                      </a>
                                      <span class="price"><?php echo $product['price'];?>₽</span>
                                      <a class="buy-button add-to-cart-button">Купить</a>
                                    </div>
                                  <?php }?>
                                <script src = "/js/buy-button.js"></script>
                          </div>
                      </div>
                    </main>
                    <script src="/js/preloder.js"></script>
                    <footer style=" padding: 30px 0; height: auto; ">
                      <div style="display: flex; justify-content: space-around;">
                        <div style="width: 30%;">
                          <h3>Компания</h3>
                          <ul>
                            <li><a href="page.html">Главная</a></li>
                            <li><a href="indormation.html">О нас</a></li>
                            <li><a href="kontact.html">Контакты</a></li>
                          </ul>
                        </div>
                        <div style="width: 30%;">
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
