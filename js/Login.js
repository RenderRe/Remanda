function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Пример простой проверки данных (можете заменить на более сложную проверку)
    if (username === 'Dren' && password === 'Prod') {
        window.location.href = '/page.html'
    } else if (username === 'user2' && password === 'password2') {
        alert('Login successful for User 2');
    } else {
        alert('Invalid username or password');
    }
}
function EnterPress (event){
    if(event.key == 'Enter'){
        login();
    }
}
document.getElementById('password').addEventListener('keypress', EnterPress);