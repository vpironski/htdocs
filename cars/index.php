
<style>
.container {
	border: 2px solid #7f7f7f;
	border-radius: 8px;
	padding: 10px;
}
</style>

<?php

// връзка с базата данни. В dbname се пише името на базата
// в последните два параметъра са потребителско име и парола за базата. Ако не сте ги сменяли, те са: root без парола

$connection = new PDO('mysql:host=localhost:3306;dbname=cars', "root", "");

// със следните редове се зареждат данните от базата в променливата $rows

	$query = $connection->prepare('SELECT * FROM cars');
	$query->execute();
	$rows = $query->fetchAll();
?>

<?php
// темплейта, който е в тялото на foreach, се извиква последователно толкова пъти, колкото са редовете в базата данни
// и на местата, където е необходимо, се отпечатват данните от базата

foreach( $rows as $row ) {
	
	// htmlspecialchars служи да предотврятяване на грешки при въведени "специални" символи в базата..
	// Просто запомнете, че вашите полетата трябва да бъдат така направени преди да се отпечатат в сайта, за да няма проблеми с данните
	
	$row['id'] = htmlspecialchars( $row['id'], ENT_QUOTES );
	$row['model'] = htmlspecialchars( $row['model'], ENT_QUOTES );
	$row['price'] = htmlspecialchars( $row['price'], ENT_QUOTES );
	$row['year'] = htmlspecialchars( $row['year'], ENT_QUOTES );
?>

<div class="container">
	
	<img src="images/<?= $row['id'] ?>.jpg" width="150" height="100" style="float:left;">

	<div style="float:left; margin-left:15px;">

		<a href="profile.php?id=<?= $row['id'] ?>"><?= $row["model"] ?></a><br>
		
		Цена: <?= $row["price"] ?> лв.<br>
		Година: <?= $row["year"] ?> г.<br>
	</div>

	<div style="clear:both;"></div>
	
</div>
<br>

<?php
}


?>