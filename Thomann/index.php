<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <title>Thomann</title>
</head>

<body>
<!-- Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!---  HEADER --->
<div class="header">

<!--            <button  class="button button1" onclick="window.location.href='/18314/about.php'" style="float: right; ">About</button>-->
<!--            <button class="button button1" onclick="window.location.href='/18314/shop.php'"  style="float: right">To the Site</button>-->
    <div class="row">
        <img src="images/logo.png" class="rounded mx-auto d-block" style="width: 320px; height: 320px; margin-top: -160px; margin-bottom: -90px">
        <h2 style="text-align: center">Music is our passion</h2>
    </div>
</div>


    <!--    Carousel  -->
<div id="carouselExampleControls" class="carousel slide mx-auto text-center" data-ride="carousel" style="width: 1200px; height: 600px; ">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/flute_C.jpeg" class="d-block w-100" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/strings_C.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/thrompet_C.jpeg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<h4 style=" text-align:center; margin-top: -100px">Visit out website to see our full array of products</h4>


<!---- POP-UPS -->

<section class="pop text-center" >
    <h2>Our Categories</h2>
    <div class="row">
        <div class="pop-col" >
            <a href="shop.php?search=drums" class="link" >
                <img src="images/drums_p.jpg">
                <div class="layer">
                    <h3>DRUMS</h3>
                </div>
            </a>
        </div>
        <div  class="pop-col"><a href="shop.php?search=guitars" class="link" >
                <img src="images/strings_p.jpeg">
                <div class="layer">
                    <h3>GUITARS</h3>
                </div>
            </a>
        </div>
        <div  class="pop-col"><a href="shop.php?search=wind" class="link" >
                <img src="images/horn_p.jpg">
                <div class="layer">
                    <h3>BRASS & WOODWIND</h3>
                </div>
            </a>
        </div>

        <h4>We also sell all kinds of other accessories<br>
            that you might need in your musical adventure.<br>
            Such as drum keys, guitar strings, sheet music and many more.</h4>
    </div>
</section>


<!---  SHOWCASE -->
<section class="showcase">
    <div style="background-color: rgb(81, 178, 187); width: auto; height: 80px; margin-top: -50px;"></div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h1>Quality</h1>
                <p class=" mb-0">
                    Reliable tools made by established technology.
                </p>
            </div>
            <div class="col-lg-6 order-lg-2 text-white showcase-img imgSax" style="background-image: url('images/violin_s.jpeg');">
            </div>
        </div>
    </div>


    <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/piano_s.jpeg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
            <h1>Long term support</h1>
            <p class="mb-0">
                Long warranty and care tips from our highly qualified specialists.
            </p>
        </div>
    </div>
</section>
<div class="">
    <div class="d-flex justify-content-center" style="background-color: rgb(81, 178, 187); height: 50px; margin-bottom: -20px;">
    </div>
</div>


<!---    FOOTER --->
<?php
include("footer.php");
?>
</body>