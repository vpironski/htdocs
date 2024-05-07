<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";
include "IncorrectInformationException.php";
try{
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $connection->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && $user['password'] === $password) {
            $_SESSION['user'] = $user;
            header("location:index.php");
            exit();
        } else {
            throw new IncorrectInformationException("Името или паролата е грешна");
        }
    }
} catch (IncorrectInformationException $e) {
    $error2 = $e->getMessage();
}
?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<!-- Хедър на страницата -->
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

<!-- Секция с логин формата -->
<div class="login left">
    <h2>Вход в профила</h2>
    <form id="loginForm" action="" method="post">
        <label for="username">Потребителско име</label>
        <input name="username" type="text" class="input" id="user_login" autocomplete="off" required>
        <label for="password">Парола</label>
        <input name="password" type="password" class="input" id="user_pass" autocomplete="off" required>
        <?php if (isset($error2)): ?>
            <div class="tab-content">
                <label style="position:absolute; font-family: 'Times New Roman';"><br><?= $error2 ?></label> <br><br>
            </div>
        <?php endif; ?>
        <br>
        <button name="login" type="submit">Вход</button>
    </form>
    <a href="register.php">Нямате профил? Последвайте линка за регистрация!</a>
</div>

</body>
</html>