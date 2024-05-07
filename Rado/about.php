<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description">
    <meta name="author" content="Radoslav Iliev 17522">
    <title>Nike Basketball Camp</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
<!----------Menu -------->
<div class="nav-links" id="navLinks">
    <nav>
        <a href="index.php"><img src="images/asa-logo-r.png"></a>
    <ul>
        <li><a style="color: black" href="index.php">HOME</a></li>
        <li><a style="color: black" href="contact.php">CONTACT</a></li>
    </ul>
    </nav>
</div>

    <!-- --- Footer -------->

    <section class="footer">
        <h4>About Us</h4>
        <p>We are all professionalists,who want<br>to teach all people around the world!</p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        </div>
        <p>Made with &hearts; by Radoslav Iliev</p>
        </div>
    </section>

    <!--------JavaScript for Toggle Menu------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body></html>
