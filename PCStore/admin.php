<?php
$search = @$_GET['search'];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "pcstore";

        $connections = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($connections->connect_error) {
            die("Connection failed: " . $connections->connect_error);
        }

$rows1 = $connections -> query('SELECT * FROM CPUs');
$rows2 = $connections -> query('SELECT * FROM GPUs');
$rows3 = $connections -> query('SELECT * FROM Motherboards');
$rows4 = $connections -> query('SELECT * FROM RAM');
$rows5 = $connections -> query('SELECT * FROM Storage');
$rows6 = $connections -> query('SELECT * FROM PSUs');
$rows7 = $connections -> query('SELECT * FROM Cooling');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Admin.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Admin Page</title>
</head>

<body > <!--- style="background-color: #2C3E50;->
<! Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


<!-------      SHOP           ---->

<!-------      ALL CPUs           ---->


<table>

    <tr>
        <th>CPUs</th>


    </tr>

        <?php
        foreach($rows1 as $row){
            ?>
            <tr >
                <td ><?= $row['CPUid']?></td>
                <td><?= $row['Manufacturer']?></td>
                <td><?= $row['Model']?></td>
                <td><?= $row['Name']?></td>
                <td><?= $row['Serie']?></td>
                <td><?= $row['BaseFrequency']?></td>
                <td><?= $row['BoostFrequency']?></td>
                <td><?= $row['CoreCount']?></td>
                <td><?= $row['ThreadCount']?></td>
                <td><?= $row['Socket']?></td>
                <td><?= $row['Price']?></td>
                <td><?= $row['Quantity']?></td>
                <td ><img src="images/Products/CPU/<?= $row['CPUid']?>.jpg" style="width: 200px"</td>
                <td><a href="edit.php?id=<?= $row['CPUid']?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $row['CPUid']?>">Delete</a></td>
            </tr><br>

            <?php
        }
        ?>
    <tr>
        <th><a href="add.php">ADD</a></th>
    </tr>


</table>


<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows1 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_gpu.php?id=--><?//= $row['CPUid'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\CPU\--><?//= $row['CPUid'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                            <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Name"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!--!-------      ALL GPUs           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows2 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_gpu.php?id=--><?//= $row['GPUid'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\GPU\--><?//= $row['GPUid'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                            <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Name"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!---->
<!---->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!--<-------      ALL MotherBoards           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows3 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_mobo.php?id=--><?//= $row['MOBOid'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\MOBO\--><?//= $row['MOBOid'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                        <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Model"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!-------      ALL RAM           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows4 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_gpu.php?id=--><?//= $row['RAMid'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\RAM\--><?//= $row['RAMid'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                            <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Name"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!---->
<!---->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!-------      ALL STORAGE           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows5 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_mobo.php?id=--><?//= $row['StorageID'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\Storage\--><?//= $row['StorageID'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                        <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Model"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!---------      ALL PSUs           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows6 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_mobo.php?id=--><?//= $row['PSUid'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\PSU\--><?//= $row['PSUid'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                        <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Model"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->
<!---->
<!--<-------      ALL COOLING           ---->
<!---->
<!--<div class="container" style="margin-top: 20px">-->
<!--    <div class="col"></div>-->
<!--    <div class="col">-->
<!--        --><?php
//        foreach( $rows7 as $row ) {
//            ?>
<!---->
<!--            <div class = "contain">-->
<!--                <div class="container1">-->
<!--                    <a href="ind_mobo.php?id=--><?//= $row['CoolingID'] ?><!--" style="text-decoration: none; color: black" >-->
<!---->
<!--                        <img alt src="images\Products\Cooling\--><?//= $row['CoolingID'] ?><!--.jpg" width="200" height="200" style="float:left;"><br>-->
<!--                        <div class="row">-->
<!--                        <div style=" margin-left:15px;">-->
<!--                                <p>-->
<!--                                <p class="text_contain">--><?//= $row["Model"] ?><!--</p><br>-->
<!--                                PRICE: --><?//= $row["Price"] ?><!--<br> BGN-->
<!--                                </p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                        <div style="clear:both;"></div>-->
<!--                </div>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
<!--    <div class="col"></div>-->
<!--</div>-->

</body>