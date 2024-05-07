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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<!----------Menu -------->
<div class="nav-links" id="navLinks">
    <nav>
        <a href="index.php"><img src="images/asa-logo-r.png"></a>

    <ul>
        <li><a style="color: black" href="index.php">HOME</a></li>
        <li><a style="color: black" href="about.php">ABOUT</a></li>
    </ul>
    </nav>
</div>
    <!-- --- Call To Action -------->

<section class="cta">
        <h1>Enroll For Our Various Online Courses<br>Anywhere From The World</h1>
        <button type="button" id="more" name="more" class="hero-btn">CONTACT US</button>

    </section>
<section class="footer">

    <div style="display: none" id="info" name="info" >
        <div>
            <h1>Contacts</h1>
            <h4>You can reach us with the contacs below</h4>
            <br>
            <div>Email: <p>nike@nike.com</p></div>
            <div>Phone number: <p>713-565-6551</p></div>
            <div>Address US: <p>8876 Longfellow Dr.
                    Chula Vista, CA 91910</p></div>
            <div>Address New York: <p>6 East Fairview Street
                    Bronx, NY 10473</p></div>
            <div>Address London: <p>55 Park Lane
                    London
                    SE59 2HV</p></div>
        </div>
    </div>




</section>



<!--------JavaScript for Toggle Menu------->
<script>
    $("#more").click(function(){


        if($("#info").is(':visible')){
            $("#info").hide();
        }
        else{
            $("#info").show();
        }

    });


        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body></html>
