<?php
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");

session_start();


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);
if ($_POST ['register']) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;


    $check = $connection->query("SELECT * FROM Users WHERE Username = '" . $username . "'")->fetch();

    if ($check) {
        $error = "This profile already exists";
    }
    if (!$username) {
        $error = "No username";

    }
    if (!$email) {
        $error = "No email";
    }
    if (!$password) {
        $error = "No password";
    }

    if (!$error) {

        $sql = "INSERT INTO Users (Username, Email, Password) VALUES (?,?,?)";
        $connection->prepare($sql)->execute([$username, $email, $password]);

        $error = "Thank you!";

    }

} else if ($_POST['login']) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $error2 = false;

    $query = "SELECT * FROM Users WHERE Username = '" . $username . "' AND Password = '" . $password . "'";

    $user = $connection->query($query)->fetch();

    if ($user) {

        $_SESSION['user'] = $user;

        header("location:../PcStore/index.php");

    } else {

        $error2 = "Incorrect Username or Password !";
    }

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Login.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>PcStore login</title>
</head>

<body style="background-color: #2C3E50;">
<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!--- HEADER ---->

<div class="container-fluid mx-auto text-center" style="width:100%; max-width: 1000px;">
    <img src="images\Main Page\logo6.png" class="logo" style="width:100%; max-width:700px">
</div>



<div class="form-wrap">
    <div class="tabs">
        <h3 class="login-tab"><a href="#login-tab-content"  style="text-decoration: none">Login</a></h3>
        <h3 class="signup-tab"><a class="active" href="#signup-tab-content" style="text-decoration: none">Sign Up</a></h3>
    </div><!--.tabs-->



    <!-- SIGN IN --->

    <div class="tabs-content">
        <div id="signup-tab-content" class="active">
            <form class="signup-form" action="" method="post">
                <input name="email" type="email" class="input" id="user_email" autocomplete="off" value="<?= $email ?>" placeholder="Email">
                <input name="username" type="text" class="input" id="user_name" autocomplete="off"  value="<?= $username ?>" placeholder="Username">
                <input name="password" type="password" class="input" id="user_pass" autocomplete="off" value="<?= $password ?>" placeholder="Password"><br>
                <?php if ($error){
                    ?>
                    <label style="position:absolute; font-family: 'Times New Roman'"><br><?= $error ?></label><br><br>
                    <?php
                }?>
                <input name="register" value="Register" value="Refresh Page" onClick="refresh" type="submit" class="button" >

            </form>
            <div class="help-text">
            </div>
        </div>


        <!-- LOGIN --->
        <div id="login-tab-content">
            <form class="login-form" action="" method="post">
                <input name="username" type="text" class="input" id="user_login" autocomplete="off" placeholder="Username">
                <input name="password" type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                <?php if ($error2){
                    ?>
                    <div class="tab-content">
                        <label style="position:absolute; font-family: 'Times New Roman';"><br><?= $error2 ?></label> <br><br>
                    </div>

                    <?php
                }?>
                <input type="checkbox" class="checkbox" id="remember_me">
                <label for="remember_me">Remember me</label>

                <input type="submit" name='login' class="button" value="Login"><br>

            </form>

            <div class="help-text">

            </div>
        </div>




    </div>
</div>

</body>




<script>
    jQuery(document).ready(function($) {
        tab = $('.tabs h3 a');

        tab.on('click', function(event) {
            event.preventDefault();
            tab.removeClass('active');
            $(this).addClass('active');

            tab_content = $(this).attr('href');
            $('div[id$="tab-content"]').removeClass('active');
            $(tab_content).addClass('active');
        });
    });
</script>
