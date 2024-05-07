<style>

    * {box-sizing: border-box;}

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }



    .topnav input[type=text] {
        float: right;
        padding: 6px;
        margin-top: 8px;
        margin-right: 16px;
        border: none;
        font-size: 17px;
    }

    @media screen and (max-width: 600px) {
        .topnav a, .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }

        .topnav input[type=text] {
            border: 1px solid #ccc;
        }
    }

    body{
        margin: 0px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }
    .contain{
        padding-left: 50px;
    }
    .container {
        background-color: #ffffff;
        width: 380px;
        height: 240px;
        float: left;
        margin-right: 20px;
        margin-bottom: 10px;
        border: 2px solid rgb(229,18,18);
        border-radius: 8px;
        padding: 10px;
    }
    h1
    {
        font-family: "Times New Roman", Times, serif;
        font-size: 200%;
    }
    p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 100%;
    }
    .jumbotron-fluid
    {
        color: rgb(255, 255, 255);
        background-color:rgb(229,18,18);
        text-shadow: black 0.12em 0.12em 0.12em;
        margin: 0;
        margin-bottom: 20px;
        padding: 5px;
    }



</style>

<?php

$search = @$_GET['search'];
$advisor = @$_GET['advisor'];

$con = new PDO('mysql:host=localhost;dbname=myPrj',"root","");


$rows = $con -> query('SELECT 
i.id,
i.pr, i.model, i.price, i.energy_eff, i.color
FROM inventory i'
);

if ($search){
    $rows = $con -> query('SELECT 
i.id,
i.pr, i.model, i.price, i.energy_eff, i.color
FROM inventory i
WHERE i.pr  LIKE "%'.$search.'%"   ');
}

else if($advisor == "Confirm"){
    $product = @$_GET['product'];
    $people = @$_GET['people'];
    $price = @$_GET['price'];
    $room = @$_GET['room'];

    $rows = $con -> query('SELECT 
i.id,
i.pr, i.model, i.price, i.energy_eff, i.color
FROM inventory i
WHERE i.pr  LIKE "%'.$product.'%"
AND i.people = '.$people.'
AND i.price <= '.$price.' 
AND i.room_size <= '.$room.' ');
}

else{
    $rows = $con -> query('SELECT 
i.id,
i.pr, i.model, i.price, i.energy_eff, i.color
FROM inventory i'
    );
}
?>

<body>

<div style="position: fixed; width: 100%;">
    
        <div class="topnav" style="position: relative; top: -10px; z-index: 1000 ">

            <form>
                <div style = "position: absolute; right: 150px; top: 50px">
                    <a href="advisor.php"  style = "color: white; text-decoration: none; font-size: large">Wizard</a>
                </div>
                <input type="text" name = "search" placeholder="Search..." autocomplete="off">
                <input type="submit" style = "display: none">
            </form>
        </div>


        <div class = jumbotron-fluid style="position: relative; top: -16px; ">
            <h1>Technoshop</h1>
        <h4 style="font-size:16px; font-family: Times new Roman" >The best electronics shop you can find</h4>
        </div>
</div>

</body>
<br><br><br><br><br><br><br><br><br>
<?php
foreach( $rows as $row ) {
    ?>

        <div class = "contain">
    <div class="container">

        <img alt src="images/<?= $row['id'] ?>.jpg" width="130" height="100" style="float:left;">



        <div style="float:left; margin-left:15px;">
            <p>
            Product: <a href="profile.php?id=<?= $row['id'] ?>"><?= $row["pr"] ?></a><br>
            Model: <?= $row["model"] ?> <br>
            Price: <?= $row["price"] ?> lv<br>
            </p>
        </div>

        <div style="clear:both;"></div>
    </div>
    </div>


    <?php
}
?>

