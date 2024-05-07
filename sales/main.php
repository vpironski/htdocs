<style>
    .container {
        border: 2px solid #08a193;
        border-radius: 8px;
        padding: 10px;
    }
</style>

<?php

// connection

$connection = new PDO('mysql:host=localhost;dbname=mydb', "root", "");

// в $rows има записани всички редове от таблицата sales

$rows = $connection->query('SELECT 
s.customers_id, c.customer_name, c.customer_num,s.inventory_id, i.product_name, i.price,s.date
FROM sales s 
LEFT JOIN customers c ON c.id = s.customers_id
LEFT JOIN inventory i ON i.id = s.inventory_id
');
echo "Vihren and Co. OOD";

// отпечатване на редовете от таблицата

foreach( $rows as $row ) {
    ?>

    <div class="container">


        <div style="float:left; margin-left:15px;">

            Продукт: <?= $row["product_name"] ?> <br>
            Цена: <?= $row["price"] ?> лв<br>
            Купено от: <?= $row["customer_name"]?>
                       <?= $row["customer_num"]?><br>
            На датa: <?= date("d.m.Y", strtotime( $row["date"] ))?>
        </div>

        <div style="clear:both;"></div>

    </div>
    <br>

    <?php
}


?>