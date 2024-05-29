    const buyButtons = document.querySelectorAll('.buy-button'); // Выбираем все кнопки
  
    buyButtons.forEach(button => {
      button.addEventListener('click', function() { // Добавляем обработчик для каждой кнопки
        if (button.textContent === 'Купить') {
          button.textContent = 'В корзине';
          button.classList.add('active');
        } else {
          button.textContent = 'Купить';
          button.classList.remove('active');
        }
      });
    });
  