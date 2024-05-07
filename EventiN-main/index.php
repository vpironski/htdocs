<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="index.css?<?php echo time(); ?>">


</head>
<?php
    include "connection.php";

    $rows = $connection -> query('SELECT
    e.event_id,
    e.event_name, e.event_date, e.event_price
    FROM events e');
?>
    <body>
    <div class="header">
        <h1>EventiN</h1>
        <p>Купете билет за своето любимо събитие онлайн</p>
    </div>

    <div class="nav">
        <a href="login.php">Вход</a>
        <a href="index.php">Събития</a>
        <a href="contacts.php">Контакти</a>
    </div>

    <div class="container">
        <?php
        foreach ($rows as $row){
        ?>
        <div class="ticket">
            <img src="<?=$row["event_id"]?>.png">
            <h3><?=$row["event_name"]?></h3>
            <p><?=$row["event_date"]?></p>
            <p>Price: <?=$row["event_price"]?> lv.</p>
            <button>Buy</button>
        </div>

        <?php
        }
        ?>

    </div>

    </body>
</html>
