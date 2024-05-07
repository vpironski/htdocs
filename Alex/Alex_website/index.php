
<?php

session_start();
if ( !$_SESSION['user'] )
	header("location:index.php");


$connection = new PDO('mysql:host=localhost;dbname=Alex',"root","");
$car    = $connection -> query('SELECT c.id, c.model
FROM cars c');
$part = $connection -> query('SELECT p.id, p.name, p.price, p.rev, p.for
FROM parts p');
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Car Parts Website</title>

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<>

<header>
    <div class="nav conteiner">
        <i class='bx bx-menu' id="menu icon"></i>
        <a href="#" class="logo">Car<span>Parts</span></a>
        <ul class="navbar">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#cars">Cars</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#parts">Parts</a></li>
            <li><a href="#blog">Our Blog</a></li>
        </ul>
        <i class='bx bx-search-alt' id="search-icon" ></i>
        <div class="search-box conteiner">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>


    </div>


    </div>
</header>
<section class="home" id="home">
    <div class="home-text">
        <h1>We Have Everything<br>Your <span>Cars </span> Need</h1>
        <p>Welcome to our ,<br>  parts site</p>
        <a href="#" class="btn">Discover Now</a>
    </div>

</section>


<section class="cars" id="cars">
    <div class="heading">
        <span>All Cars</span>
        <h2>We have all types cars</h2>
        <p>We have all parts for all models cars</p>
    </div>
    <div class="cars-container container">
<?php
foreach( $car as $row) {
?>
        <div class="box">
            <img src="car/<?=$row['id'] ?>.jpg" alt="">
            <h2><?= $row["model"] ?></h2>
        </div>
<?php
}
?>
    </div>
</section>



<section class="about container" id="about">
    <div class="about-img">
        <img src="about.jpg" alt="">
    </div>
    <div class="about-text">
        <span>About Us</span>
        <h2>Cheap Prices With <br>Quality Cars</h2>
        <p>We have all parts for all models Cars</p>
        <a href="#" class="btn">Learn More</a>
    </div>
</section>



    <div class="heading">
        <span>What We Ofter</span>
        <h2>Our Car Is Always Excellent</h2>
        <p>Our car parts are of good quality</p>
    </div>



<section class="parts" id="parts">
    <div class="parts-container container">
    <?php
    foreach( $part as $row ) {
        ?>

        <div class="box">
            <img src="part/<?=$row['id']?>.jpg" alt="">
            <h3><?=$row["name"]?></h3>
            <span><?=$row['price']?></span>
            <i class='bx bxs-star'><?=$row['rev']?> <?=$row['for']?></i>
            <a href="#" class="btn">Buy Now</a>
            <a href="#" class="details">View Details</a>
        </div>


        <?php
    }
    ?>
    </div>
</section>

<section class="blog" id="blog">
    <div class="heading">
        <span>Our & News</span>
        <h2>Blog Content</h2>
        <p>Our car parts are of good quality</p>
    </div>
    <div class="blog-container container">
        <div class="box">
            <img src="car61.jpg" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
        <div class="box">
            <img src="car62.jpg" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
        <div class="box">
            <img src="car63.jpg" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
        <div class="box">
            <img src="car64.webp" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
        <div class="box">
            <img src="car65.jpg" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
        <div class="box">
            <img src="car66.jpg" alt="">
            <span>Jun 20 2022</span>
            <h3>How To Get Perfect Car At Low Price</h3>
            <p>In our blog we have interesting articles and news</p>
            <a href="#" class="blog-btn">Read More<i class='bx bxs-chevron-right-circle'></i>
        </div>
    </div>
</section>
<section class="footer">
    <div class="footer-container container">
        <div class="footer-box">
            <a href="#" class="logo">Car<span>Parts</span></a>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Page</h3>
            <a href="#">Home</a>
            <a href="#">Cars</a>
            <a href="#">Parts</a>
            <a href="#">Sales</a>
        </div>
        <div class="footer-box">
            <h3>Legal</h3>
            <a href="#">Privacy</a>
            <a href="#">Refund Policy</a>
            <a href="#">Cookie Policy</a>

        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <p>Bulgaria</p>
            <p>Turkey</p>
            <p>Romania</p>
        </div>
    </div>
</section>
<script src="main.js"></script>
</body>
</html>
