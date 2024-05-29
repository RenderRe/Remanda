const products = JSON.parse('<?php echo json_encode($products); ?>');
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
          <a href="basket.php">  
            <img src = ${product.img} >
          </a>
          <span class="price">${product.price}₽</span>
          <a id="buy-button"  class="add-to-cart-button">Купить</a>
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
              <a href="basket.php">  
                <img src = ${product.img} >
              </a>
              <span class="price">${product.price}₽</span>
              <a id="buy-button"  class="add-to-cart-button">Купить</a>
            </div>
          `;
          productsList.innerHTML += productHTML;
        });
      }
    });
  
  function filterProducts(products, query) {
    return products.filter(product => product.name.toLowerCase().includes(query.toLowerCase()));
  }