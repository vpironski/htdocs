<?php 
session_start();

// print_r($_SESSION);
// exit;


?>
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

    .active{
        background-color: #51b2bb;
    }

</style>
<!---->
<?php
//$search = $_GET['search'];
//?>
<!-- Logo and SearchBar-->
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<div class="row">
    <div class="col">
        <a href="shop.php" class=" mx-auto d-block" style="width: 200px; height: 200px; margin-top: -80px; margin-bottom: 30px">
            <img src="images/logo.png" class="rounded mx-auto d-block" style="width: 200px; height: 200px; ">
        </a>

        <!--        <img src="images/logo.png" class="rounded mx-auto d-block" style="width: 200px; height: 200px; margin-top: -80px; margin-bottom: 30px">-->
    </div>
</div>

<!---- SEARCH BAR -->
<div class="row" style=" margin-bottom: -25px; ">
    <div class="col"></div>
    <div class="col"><form>
            <div class="input-group rounded" style=" margin-top: -70px;">

                <input type="text" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" autocomplete="off" />
            </div>
        </form></div>
    <div class="col"></div>

</div>


<!---  FILTERS --->


<div class="container-fluid" style="background-color:black; height: 50px; margin-top: 10px">
    <div class="row">
        <div class="col" style="color: white; margin-left: 160px">
            <button name="drums" onclick="window.location.href='shop.php?search=drums'"  class="button button1 <?php if($search == "drums"){echo "active";}?>" style="border:none ">Drums</button>

        </div>
        <div class="col" style="color: white;">
            <button name="guitars" onclick="window.location.href='shop.php?search=guitars'" class="button button1 <?php if($search == "guitars"){echo "active";}?>" style="border:none ">Guitars/Bass</button>
        </div>
        <div class="col" style="color: white">
            <button name="brass" onclick="window.location.href='shop.php?search=brass'" class="button button1 <?php if($search == "brass"){echo "active";}?>" style="border:none ">Brass</button>
        </div>
        <div class="col" style="color: white">
            <button name="woodwind" onclick="window.location.href='shop.php?search=woodwind'" class="button button1 <?php if($search == "woodwind"){echo "active";}?>" style="border:none ">Woodwind</button>
        </div>
        <div class="col" style="color: white">
            <button name="other" onclick="window.location.href='shop.php?search=other'" class="button button1 <?php if($search == "other"){echo "active";}?>" style="border:none ">Accessories</button>
        </div>
        <?php if (!isset($_SESSION['user'])) { ?>
        <div class="col" style="color: white">
            <button name="other" onclick="window.location.href='login.php?action=login'" class="button button1" style="border:none" >Login</button>
        </div>
        <div class="col" style="color: white">
            <button name="other" onclick="window.location.href='login.php?action=register'" class="button button1" style="border:none ">Register</button>
        </div>
        <?php } else { ?>
            <div class="col" style="color: white">
            <button name="other" onclick="window.location.href='logout.php'" class="button button1" style="border:none ">Logout</button>
        </div>
        <?php } ?>
    </div>
</div>


