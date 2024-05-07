<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>

    </style>
</head>
<body>
<div class="header">
    <h1>EventiN</h1>
    <p>Купете билет за своето любимо събитие онлайн</p>
</div>

<!-- Навигационно меню на страницата -->
<div class="nav">
    <a href="login.php">Вход</a>
    <a href="index.php">Събития</a>
    <a href="contacts.php">Контакти</a>
</div>

<div class="login">
    <h2>Регистриране</h2>
    <form id="loginForm">
        <label for="usernameR">Потребителско име</label>
        <input type="text" id="usernameR" name="usernameR" placeholder="Въведете потребителско име" required>
        <label for="passwordR">Парола</label>
        <input type="password" id="passwordR" name="passwordR" placeholder="Въведете парола" required>
        <label for="confirmPasswordR">Повторете паролата</label>
        <input type="password" id="confirmPasswordR" placeholder="Въведете парола" required>
        <div id="message" class="message"></div>
        <button type="submit">Регистриране</button>
    </form>
</div>

<script>
    const passwordR = document.getElementById('passwordR');
    const confirmPasswordR = document.getElementById('confirmPasswordR');
    const message = document.getElementById('message');
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(event) {
        if (passwordR.value !== confirmPasswordR.value) {
            message.textContent = 'Паролите не съвпадат';
            event.preventDefault(); // Prevent the default form submission
        }
    });

    confirmPasswordR.addEventListener('input', function() {
        if (passwordR.value === confirmPasswordR.value) {
            message.textContent = 'Паролите съвпадат';
        } else {
            message.textContent = 'Паролите не съвпадат';
        }
    });
</script>
</body>
</html>