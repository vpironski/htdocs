<?php
session_start();


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING );
$connection = new PDO('mysql:host=localhost:3306;dbname=Alex', "root", "");
if ( $_POST ['register'] ) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;



    $check = $connection->query("SELECT * FROM profile WHERE username = '" . $username . "'")->fetch();

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

        $sql = "INSERT INTO profile (username, email, password) VALUES (?,?,?)";
        $connection->prepare($sql)->execute([$username, $email, $password]);

        $error = "Thank you!";

    }

}
else if ( $_POST['login'] ) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $error2 = false;

    $query = "SELECT * FROM profile WHERE username = '" . $username . "' AND password = '" . $password . "'";

    $user = $connection->query( $query )->fetch();

    if ( $user ) {

        $_SESSION['user'] = $user;

        header("location:../Alex_website/index.php");

    } else {

        $error2 = "Incorrect Username or Password";
    }

}
?>
<html>
<head>
    <title>Login And Registration Form</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
            <img src="fb.webp">
            <img src="inst.webp">
            <img src="gg.png">
        </div>
        <form id="login"  class="input-group" method="post">
            <input type="text" name="username" class="input-field"  placeholder="Username"required>
            <img id="eye1" style="position: absolute; height: 16px; width: 15px; margin-top: 14px; margin-left: 285px; cursor: pointer" src="opened.png" title="Show your password" onCLick="show_password()">
            <input type="password" name="password" class="input-field password" placeholder="Enter Password" required>
            <input  type="checkbox" class="check-box"><span>Remember Password</span>
            <button  type="submit" name='login' value="Login" class="submit-btn">Log In</button>

            <?php if ($error2){
                ?>
                <label style="position:absolute; font-family: 'Times New Roman'"><br><?= $error2 ?></label>
                <?php
            }?>

        </form>

        <form id="register" class="input-group" method="post">
            <input type="text" class="input-field" name="username" value="<?= $username ?>" placeholder="Username">
            <input type="email" class="input-field" name="email" value="<?= $email ?>" placeholder="Email ">
            <img  id="eye2" style="position: absolute; height: 16px; width: 15px; margin-top: 25px; margin-left: 279px; cursor: pointer" src="opened.png" title="Show your password" onCLick="show_password()">
            <input  type="password" class="input-field password" name="password" value="<?= $password ?>" placeholder="Enter Password" >
            <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
            <button  type="submit" name="register" value="Register" value="Refresh Page" onClick="refresh" class="submit-btn">Register</button>
            <?php if ($error){
                ?>
                <label style="position:absolute; font-family: 'Times New Roman'"><br><?= $error ?></label>
                <?php
            }?>





        </form>

    </div>
</div>
<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function show_password() {
        var elements = document.getElementsByClassName('password');
        for (var i=0; i<elements.length; i++) {
            if(elements[i].type=="text") {
                document.getElementById("eye1").src="opened.png"
                document.getElementById("eye2").src="opened.png"
                elements[i].type="password"
            }
            else {
                elements[i].type="text"
                document.getElementById("eye1").src="closed.jpg"
                document.getElementById("eye2").src="closed.jpg"
            }
        }


    }
    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    <?php
    if ( $_POST ['register'] ){
        echo "register();";
    }
    ?>

</script>



</body>
</html>