document.addEventListener('DOMContentLoaded', function() {
    var text = "Добро пожаловать в магазин HF";
    var speed = 50; // Скорость анимации (в миллисекундах)

    var typingText = document.getElementById('typing-text');

    function typeWriter() {
        if (text.length > 0) {
            typingText.innerHTML += text.charAt(0);
            text = text.slice(1);
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter();
});