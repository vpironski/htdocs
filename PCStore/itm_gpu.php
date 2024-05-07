
<?php
$search = @$_GET['search'];
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");

$rows = $connection -> query('SELECT * FROM GPUs');

if ($search) {
    $query = $connection->prepare('SELECT *
FROM GPUs g
WHERE g.Manufacturer LIKE ?
   OR g.Vendor  LIKE ?
   OR g.Model  LIKE ?
   OR g.Name LIKE ?
   OR g.BaseFrequency LIKE ?
   OR g.BoostFrequency LIKE ?
   OR g.VRAM LIKE ?
   OR g.ConnectorType LIKE ?');

    $query->execute([ "%".$search."%","%".$search."%","%".$search."%",
        "%".$search."%","%".$search."%","%".$search."%",
        "%".$search."%","%".$search."%"]);

    $rows = $query->fetchAll();
}

else{
        $rows = $connection -> query('SELECT * FROM GPUs' );
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
</head>

<!---- SHOP ---->


<div class="container" style="margin-top: 20px">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_gpu.php?id=<?= $row['GPUid'] ?>" style="text-decoration: none; color: black" >

                        <img alt src="images\Products\GPU\<?= $row['GPUid'] ?>.jpg" class="containPicture"><br>
                        <div class="row">
                            <div style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Name"] ?></p><br>
                                Category: <?=$row['Model'] ?><br>
                                <?= $row["Price"] ?><br>
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
