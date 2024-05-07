<style>
    /*CONTEINER*/
    body{
        margin: 0px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .contain{
        padding-left: 50px;
    }
    .container1 {
        background-color: #f5f5f5;
        width: 380px;
        height: 240px;
        float: left;
        margin-right: 20px;
        margin-bottom: 10px;
        border-radius: 8px;
        padding: 10px;
    }

    .text_contain{
        color:black;
    }
    .text_contain:hover{
        color:purple
    }
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
    * {
        margin: 0;
        padding: 0; }

    a {
        color: #666;
        text-decoration: none; }
    a:hover {
        color: #4FDA8C; }

    input {
        font: 16px/26px "Raleway", sans-serif; }

    body {
        color: #666;
        background-color: #f1f2f2;
        font: 16px/26px "Raleway", sans-serif; }

    .form-wrap {
        background-color: #fff;
        width: 320px;
        margin: 3em auto;
        box-shadow: 0px 1px 8px #BEBEBE;
        -webkit-box-shadow: 0px 1px 8px #BEBEBE;
        -moz-box-shadow: 0px 1px 8px #BEBEBE; }

    .form-wrap .tabs {
        overflow: hidden; }

    .form-wrap .tabs h3 {
        float: left;
        width: 50%; }

    .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }

    .form-wrap .tabs h3 a.active {
        background-color: #fff; }

    .form-wrap .tabs-content {
        padding: 1.5em; }

    .form-wrap .tabs-content div[id$="tab-content"] {
        display: none; }

    .form-wrap .tabs-content .active {
        display: block !important; }

    .form-wrap form .input {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        color: inherit;
        font-family: inherit;
        padding: .8em 0 10px .8em;
        border: 1px solid #CFCFCF;
        outline: 0;
        display: inline-block;
        margin: 0 0 .8em 0;
        padding-right: 2em;
        width: 100%; }

    .form-wrap form .button {
        width: 100%;
        padding: .8em 0 10px .8em;
        background-color: #51b2bb;
        border: none;
        color: #fff;
        cursor: pointer;
        text-transform: uppercase; }

    .form-wrap form .button:hover {
        background-color: #3d888c; }

    .form-wrap form .checkbox {
        visibility: hidden;
        padding: 20px;
        margin: .5em 0 1.5em; }

    .form-wrap form .checkbox:checked + label:after {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    }
    /*BUTTONS*/
    .button {
        border-radius: 4px;
        background-color: black;
        border: none;
        color: #51b2bb;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: black;
        color: white;
        border: 2px solid #51b2bb;
    }
    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #51b2bb;
    }
    .button2:hover{
        background-color: #51b2bb;
        color:white;
    }

    .button1:hover {
        background-color: #51b2bb;
    }

    button3{
        background-color: black;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
    }

</style>
<?php
$connection = new PDO('mysql:host=localhost:3306;dbname=Thomann',"root","");

session_start();


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);
if ($_POST ['register']) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;


    $check = $connection->query("SELECT * FROM users WHERE Username = '" . $username . "'")->fetch();

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

        header("location:../Thomann/login.php?action=login");

    }

} else if ($_POST['login']) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $error2 = false;

    $query = "SELECT * FROM Users WHERE Username = '" . $username . "' AND Password = '" . $password . "'";

    $user = $connection->query($query)->fetch();

    if ($user) {

        $_SESSION['user'] = $user;

        header("location:../Thomann/shop.php");

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
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Thomann login</title>
</head>



<body >
<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



<!--- HEADER ---->
<?php
include("header.php");
?>


<div class="form-wrap">
    <div class="tabs">
        <h3 class="login-tab"><a <?php if($_GET["action"] == "login"){?> class="active" <?php }?>href="#login-tab-content"  style="text-decoration: none">Login</a></h3>
        <h3 class="signup-tab"><a <?php if($_GET["action"] == "register"){?> class="active" <?php }?> href="#signup-tab-content" style="text-decoration: none">Sign Up</a></h3>
    </div>
    <!-- SIGN IN --->

    <div class="tabs-content">
        <div id="signup-tab-content" <?php if($_GET["action"] == "register"){?> class="active" <?php }?>>
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
        <div id="login-tab-content" <?php if($_GET["action"] == "login"){?> class="active" <?php }?>>
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


<?php 
include("footer.php");
?>
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
