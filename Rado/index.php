<?php
$connection = new PDO('mysql:host=localhost;dbname=17522',"root","");
$c = $connection -> query('SELECT c.name, c.info
FROM courses c');

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
    <meta name="author" content="Radoslav Iliev 17522">
    <title>Nike Basketball Camp</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/asa-logo-r.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">OUR PROGRAMS</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>World's Biggest Basketball Camp</h1>
            <p>Nike is one of the most recognizable and powerful brands in basketball, so it is no surprise that they put on a great camp.<br>If you want a basketball camp with a lot of options, this could be the one for you.</p>
            <a href="" class="hero-btn">Visit Us To know More</a>
        </div>

    </section>

    <!-------- Course ------->
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>Basketball, Football, Volleyball and many other courses.</p>
        <br>

		
            <div class="row">
<?php
    foreach( $c as $row ) {
    ?>
                <div style="width: 30%; float: left; margin-left: 20px;" class="course-col">
                    <h3><?= $row['name']?></h3>
                    <p><?= $row['info']?></p>
                </div>

    <?php
}
?>
            </div>
        </section>



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

    <section  class="testimonials">
        <h1>What Our Student Says</h1>
        <p>In promotion and advertising, a testimonial or show consists of a person's written or spoken statement extolling the virtue of a product.</p>
        <br><br>
        <div class="row">
        <?php
        foreach( $t as $row ) {
        ?>
            <div class="testimonials-col">
                <img style="height: 70px; width: 100px; "  src="t/<?= $row['id']?>.png">
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


    <!-- --- Call To Action -------->

    <section class="cta">
        <h1>Enroll For Our Various Online Courses<br>Anywhere From The World</h1>
        <a  href="contact.php" class="hero-btn">CONTACT US</a>

    </section>

    <!-- --- Footer -------->

    <style>
        .button {
            background-color: #fff3f3;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #f5c6c6;
        }

        .button1:hover {
            background-color: #f5c6c6;
            color: white;
        }
    </style>


    <section class="footer">
        <button style="margin-top: 20px; margin-left: 15px" type="button" id="more" name="more" class="button button1" >About us</button>
        <br>

  
        <div id="info" name="info" style="display: none">
        <p>We are all professionalists, who want<br>to teach all people around the world!</p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        <p>Made with &hearts; by Radoslav Iliev</p>
        </div>
    </section>

    <!--------JavaScript for Toggle Menu and the "About us" button------->
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
