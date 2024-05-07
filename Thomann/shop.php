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

    .text_contain{
        color:black;
        }
    .text_contain:hover{
        color:purple
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



</style>


<?php

$search = @$_GET['search'];


$connection = new PDO('mysql:host=localhost;dbname=Thomann',"root","");


$rows = $connection -> query('SELECT 
i.id,
i.model, i.name, i.price
FROM items i'
);

if ($search) {
    $query = $connection->prepare('SELECT 
i.id,
i.model, i.name, i.price, i.kind
FROM items i
WHERE i.kind LIKE ? 
   OR i.model LIKE ? 
   OR i.name LIKE ?');

    $query->execute([ "%".$search."%","%".$search."%","%".$search."%" ]);
    $rows = $query->fetchAll();
}


else{
    $rows = $connection -> query('SELECT 
i.id,
i.model, i.name, i.price
FROM items i' );
}
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

<!--- HEADER ---->
<?php include("header.php")?>..


<!---  ITEMS ----->
<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="item.php?id=<?= $row['id'] ?>" style="text-decoration: none; color: black" >

                    <img alt src="products/<?= $row['id'] ?>.jpeg" width="200" height="200" style="float:left;"><br>
                    <div class="row">
                        <div style=" margin-left:15px;">
                            <p>
                                 <p class="text_contain"><?= $row["name"] ?></p><br>
                                Category: <?=$row['model'] ?><br>
                                <?= $row["price"] ?><br>
                            </p>
                        </div>

                    </div>
                    <div style="clear:both;"></div>
                </div>
                </a>

            </div>


            <?php
        }
        ?>
    </div>
    <div class="col"></div>

</div>



<div style="clear:both;"></div>
    <!---    FOOTER --->
    <?php
include("footer.php");
?>
</body>

