
<?php
$search = @$_GET['search'];
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");

$rows = $connection -> query('SELECT * FROM CPUs');

if ($search) {
    $query = $connection->prepare('SELECT *
FROM CPUs c
WHERE c.Manufacturer LIKE ?
   OR c.Model  LIKE ?
   OR c.Name LIKE ?
   OR c.Serie LIKE ?
   OR c.BaseFrequency LIKE ?
   OR c.CoreCount LIKE ?
   OR c.ThreadCount LIKE ?
   OR c.Socket LIKE ?
   OR c.BoostFrequency LIKE ?');

    $query->execute([ "%".$search."%","%".$search."%","%".$search."%",
        "%".$search."%","%".$search."%","%".$search."%",
        "%".$search."%","%".$search."%","%".$search."%"]);

    $rows = $query->fetchAll();
}

else{
        $rows = $connection -> query('SELECT * FROM CPUs' );
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


<div class="container " style="margin-top: 20px; align: centre">
    <div class="col"></div>
    <div class="col">
        <?php
        foreach( $rows as $row ) {
            ?>

            <div class = "contain">
                <div class="container1">
                    <a href="ind_cpu.php?id=<?= $row['CPUid'] ?>" style="text-decoration: none; color: black" >
                        <div class="col">
                        <img alt src="images\Products\CPU\<?= $row['CPUid'] ?>.jpg" class="containPicture"><br>
                        </div>
                            <div clas="col-md" style=" margin-left:15px;">
                                <p>
                                <p class="text_contain"><?= $row["Name"] ?></p><br>
                                PRICE: <?= $row["Price"] ?><br> BGN
                                </p>
                            </div>


                        </div>

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
