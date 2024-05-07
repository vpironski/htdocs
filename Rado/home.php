<?php
$connection = new PDO('mysql:host=localhost;dbname=17522',"root","");

$f = $connection -> query('SELECT *
FROM facilities ');

$t = $connection -> query('SELECT *
FROM testimonials');
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description">
    <meta name="author" content="Radoslav Iliev 175">
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
        <li><a style="color: black" href="course.php">COURSE</a></li>
        <li><a style="color: black" href="about.php">ABOUT</a></li>
        <li><a style="color: black" href="contact.php">CONTACT</a></li>
    </ul>
    </nav>
</div>

<!-------- Campus ------->

<section class="campus">
    <h1>Our Global Campus</h1>
    <p>HIGHLIGHTS INCLUDE: <br>
        Fundamental instruction, individual development, and team play;<br>
        Off-court discussions and activities to enhance on-court game;<br>
        Receive a Nike Basketball Camp t-shirt and other prizes!</p>
    <br>

    <div class="row">
        <div style="width: 30%; float: left; margin-left: 20px;" class="campus-col">
            <img src="images/usa1.png">
            <div class="layer">
                <h3>USA</h3>
            </div>
        </div>
        <div style="width: 30%; float: left; margin-left: 20px;" class="campus-col">
            <img src="images/NewYork.png">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div style="width: 30%; float: left; margin-left: 20px;" class="campus-col">
            <img src="images/LONDON.png">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
    </div>
</section>
<br><br>

<!-------- Facilities ------->

<section class="facilities">
    <h1>Our facilities</h1>
    <p>Confidence building: So much of being a good athlete revolves around confidence. Nike sports camps aim to facilitate determination rather than bring players down.</p>
    <br>
    <div class="row">
        <?php
        foreach( $f as $row ) {
            ?>
            <div style="width: 30%; float: left; margin-left: 20px;" class="facilities-col">
                <img src="f/<?= $row['id']?>.png">
                <h3><?= $row['name']?></h3>
                <p><?= $row['info']?></p>
            </div>

            <?php
        }
        ?>
    </div>

</section>



<!-------- testimonials -------->

<section class="testimonials">
    <h1>What Our Student Says</h1>
    <p>In promotion and advertising, a testimonial or show consists of a person's written or spoken statement extolling the virtue of a product.</p>
    <br><br>
    <div class="row">
        <?php
        foreach( $t as $row ) {
            ?>
            <div class="testimonials-col">
                <img style="height: 70px; width: 100px"  src="t/<?= $row['id']?>.png">
                <div>
                    <h3><?= $row['name']?></h3>
                    <p><?= $row['comment']?></p>

                    <?php
                    for ( $i = 0; $i < $row['stars']; $i++){
                        ?><i class="fa fa-star"></i><?php
                    }
                    ?>

                </div>
            </div>
            <?php
        }
        ?>
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
