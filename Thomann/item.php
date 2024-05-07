<!--- STYLE --->
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
    /*CARD*/

    .card-body {
        background-color: #e1e1e1;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
        width:600px;
        height:400px;
    }

</style>

<?php
$con = new PDO('mysql:host=localhost;dbname=Thomann','root',"");
$id = $_GET['id'];
$obj = $con->prepare( 'SELECT * FROM items WHERE id = ?' );
$obj->execute([$id]);
$itm = $obj->fetch();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Thomann_shop</title>
</head>

<body>
<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<?php
include("header.php");
?>

<div class="row">
    <div class="col" style=" margin-left: 40px; margin-top: 40px; font-size: 40px;">  <?=$itm['name']?> </div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col">

        <img src="products/<?= $itm['id']?>.jpeg" style="margin-left: 60px">
    </div>

    <div class="col" style="" >
        <div class="row"></div><br><br><br>
        <div class="card-body" style=" border-radius: 10px;">
            <div class="row"></div><br><br><br>
            <div class="row" style="font-size: 40px;">
                <div class="col-sm-3" style="margin-left:50px ">Price:<?=$itm ['price']?></div>
            </div><br><br>
            <div class="row"></div>
            <div class="row">
                <div class="col" style="margin-left: 50px;">
                    <button class="btn button3" style="background-color: #1F1F1F; color:white; width: 150px; height:100px; border-radius: 8px; font-size: 20px ">ORDER
                    </button>
                </div>
                <div class="col"></div>

            </div>

        </div>
    </div>

</div>

</body>
<?php
include("footer.php");
?>