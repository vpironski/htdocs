<?php
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");

$rows1 = $connection -> query('SELECT * FROM CPUs');
$rows2 = $connection -> query('SELECT * FROM GPUs');
$rows3 = $connection -> query('SELECT * FROM Motherboards');
$rows4 = $connection -> query('SELECT * FROM RAM');
$rows5 = $connection -> query('SELECT * FROM Storage');
$rows6 = $connection -> query('SELECT * FROM PSUs');
$rows7 = $connection -> query('SELECT * FROM Cooling');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ('header.php');
    ?>
</head>


<!----  CAROUSEL ----->
<div class="container  mx-auto text-center " >
    <div class="carousel slide gallery " id="carouselExampleIndicators" data-bs-ride="true" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="images\Carousel\AMD.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images\Carousel\Thermaltake.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images\Carousel\NVIDIA2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</div>


<!-------      SHOP           ---->
<!-- <div class="container mx-auto text-center">
<div class="row">
    <div class="col">
        <a href="#">
        <div class="contain"> CPU </div>
        </a>
    </div>
    <div class="col">
        <div class="contain"> GPU </div>
    </div>
    <div class="col">
        <div class="contain"> PSU </div>
    </div>
</div>

    <div class="row">
        <div class="col">
            <div class="contain"> RAM
            <img src="images/Main Page/search.png">
            </div>
        </div>
        <div class="col">
            <div class="contain"> Motherboards </div>
        </div>
        <div class="col">
            <div class="contain"> Storage </div>
        </div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="contain"> Cooling </div>
        </div>
        <div class="col"></div>
    </div>

</div> -->

<!-------      SHOP           ---->

<!-------      ALL CPUs           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows1 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_cpu.php?id=<?= $row['CPUid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\CPU\<?= $row['CPUid'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                            <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Name"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL GPUs           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows2 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_gpu.php?id=<?= $row['GPUid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\GPU\<?= $row['GPUid'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                            <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Name"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL MotherBoards           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows3 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_mobo.php?id=<?= $row['MOBOid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\MOBO\<?= $row['MOBOid'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                        <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Model"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL RAM           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows4 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_ram.php?id=<?= $row['RAMid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\RAM\<?= $row['RAMid'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                            <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Name"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL STORAGE           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows5 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_storage.php?id=<?= $row['StorageID'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\Storage\<?= $row['StorageID'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                        <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Model"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL PSUs           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows6 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_psus.php?id=<?= $row['PSUid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\PSU\<?= $row['PSUid'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                        <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Model"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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

<!-------      ALL COOLING           ---->

<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows7 as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_cool.php?id=<?= $row['CoolingID'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\Cooling\<?= $row['CoolingID'] ?>.jpg" width="200" height="200" style="float:left;"><br>
                        <div class="row">
                        <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Model"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
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


</body>


<script>

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

</script>

</html>
