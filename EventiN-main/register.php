<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>

    </style>
</head>
<?php
include "ExistingProfileException.php";
include "connection.php";

try {
    if (isset($_POST['register'])) {
        $username = $_POST['usernameR'];
        $password = $_POST['passwordR'];
        $confirmPass = $_POST['confirmPasswordR'];

        $stmt = $connection->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && $user['username'] === $username) {
            throw new ExistingProfileException("Това име вече се изполва");
        } else if ($password === $confirmPass) {
            $sql = "INSERT INTO users (username, password, isAdmin) VALUES (?, ?, 0)";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$username, $password]);

            header("location:../EventiN-main/index.php");
            exit();
        }
    }

}catch (ExistingProfileException $e) {
    $error2 = $e->getMessage();
}
?>

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
    <form id="registerForm" method="post">
        <label for="usernameR">Потребителско име</label>
        <input type="text" id="usernameR" autocomplete="off" name="usernameR" placeholder="Въведете потребителско име" required>
        <label for="passwordR">Парола</label>
        <input type="password" id="passwordR" autocomplete="off" name="passwordR" placeholder="Въведете парола" required>
        <label for="confirmPasswordR">Повторете паролата</label>
        <input type="password" id="confirmPasswordR" autocomplete="off"  name="confirmPasswordR" placeholder="Въведете парола" required>
        <div id="message" class="message">
        <?php if (isset($error2)): ?>
            <div class="tab-content">
                <label style="position:absolute; font-family: 'Times New Roman';"><br><?= $error2 ?></label> <br><br>
            </div>
        <?php endif; ?>
        </div>
        <button name="register" type="submit">Регистриране</button>



        <a href="login.php">Имате профил? Последвайте линка за влизане в профила!</a>
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