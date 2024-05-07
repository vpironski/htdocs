<?php
$search = @$_GET['search'];
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");

$id = $_GET['id'];
$obj = $connection->prepare('SELECT * FROM RAM WHERE RAMid = ?');
$obj->execute([$id]);
$itm = $obj->fetch();


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
</head>

    <!-------      ITEM PREVIEW           ---->



    <div class="container">
        <div class="preview" >
            <div class="row" >
            <h1 class="mb-0" style="max-font-size: 600px; color: black;">
                        <?= $itm['Name'] ?>
                    </h1> 
            </div>
                <div class="row">
                    <div class="col" class="previewPic" style="width:100%; max-width: 350;">
                        <img src="images\Products\RAM\<?= $itm['RAMid'] ?>.jpg" class="previewPic">
                    </div>

                    
                    <div class="col-md" style="background-color: #3498db; border-radius: 10px; padding: 10px;">
                        <div class="row">
                            <h6 class="mb-0" style="font-size: 35px;">
                            Manufacturer: <?= $itm['Manufacturer'] ?>
                            </h6>
                        </div>

                        <div class="row">
                            <h6 class="mb-0" style="font-size: 30px;">
                                Family: <?= $itm['Model'] ?>
                            </h6>
                        </div>

                        <div class="row">
                            <h6 class="mb-0"style="font-size: 30px;">
                                Frequency: <?= $itm['Frequency'] ?> MHz
                            </h6>
                        </div>

                        <div class="row">
                            <h6 class="mb-0" style="font-size: 30px;">
                                Latency: CL<?= $itm['Timing'] ?>
                            </h6>
                        </div>

                        <div class="row">
                            <h6 class="mb-0" style="font-size: 30px;">
                                Type: <?= $itm['Type'] ?>
                            </h6><br><br><br

                        </div>

                        <div class="row" style="float: right; background-color: #E74C3C; margin-left:1px; border-radius: 15px ">

                                <div class="h6" style="font-size: 50px;">
                                    Price: <?= $itm['Price']?> BGN
                                </div>


                        </div>
                    </div>
                </div> 
            </div>
        </div>
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
