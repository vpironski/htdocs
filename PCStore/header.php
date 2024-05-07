<?php
$search = @$_GET['search'];
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");


if ($search) {
    $query = $connection->prepare('SELECT *
FROM Cooling
FROM CPUs
FROM GPUs
FROM Motherboards
FROM PSUs
FROM RAM
FROM Storage

WHERE OR Cooling.model LIKE ?
   OR CPUs.model LIKE ?
   OR GPUs.model LIKE ?
   OR Motherboards.model LIKE ?
   OR RAM.model LIKE ?
   OR PSUs.model LIKE ?
   OR Storage.model LIKE ?


   ');

    $query->execute([ "%".$search."%","%".$search."%","%".$search."%",
        "%".$search."%","%".$search."%","%".$search."%",]);

    $cpu = $query->fetchAll();
    $gpu = $query->fetchAll();
    $psu = $query->fetchAll();
    $ram = $query->fetchAll();
    $mobo = $query->fetchAll();
    $storage = $query->fetchAll();
    $cooling = $query->fetchAll();


}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Style.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>PcStore</title>
</head>

<body style="background-color: #2C3E50;">
<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!--- HEADER ---->

<div class="container-fluid mx-auto text-center">
    <a href="index.php">
        <img src="images\Main Page\logo6.png" class="logo">
    </a>

</div>

<div class="container band">
    <div class="row">
        <div class="col">
            <div class="dropdown">
                <button onmouseover="myFunction()" class="dropbtn">Components</button>
                <div id="myDropdown" class="dropdown-content">
                    <!----- foreach php ---->
                    <a href="itm_cpu.php">Processors</a>
                    <a href="itm_mobo.php">Motherboards</a>
                    <a href="itm_ram.php">RAM</a>
                    <a href="itm_psu.php">Power suplies</a>
                    <a href="itm_gpu.php">Videocars</a>
                    <a href="itm_storage.php">Storage</a>
                    <a href="itm_cool.php">Cooling</a>
                </div>
            </div>
        </div>

        <div class="col">
            <form>
                <div class="input-group rounded search" style="">
                    <input type="text" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" autocomplete="off" />
                </div>
            </form>
        </div>

<!--        <div class="col">-->
<!--            <button class="cartbtn">CART</button>-->
<!--        </div>-->
        <div class="col">
            <a href="login.php" class="loginbtn">
            <button class="cartbtn"> LOGIN </button>
            </a>
        </div>
    </div>
</div>
