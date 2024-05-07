
<?php

// връзка с базата данни. В dbname се пише името на базата
// в последните два параметъра са потребителско име и парола за базата. Ако не сте ги сменяли, те са: root без парола

	$connection = new PDO('mysql:host=localhost;dbname=cars', "root", "");

// код, с който се изтрива хотел от базата при натискане на бутона изтриване 

	$delete_id = @$_GET['delete_id'];

	if ( $delete_id ) {
		
		$query = $connection->prepare('DELETE FROM cars WHERE id = ?');
		$query->execute( [ $delete_id ] );
	}

// със следните редове се зареждат данните от базата в променливата $rows

	$query = $connection->prepare('SELECT * FROM cars');
	$query->execute();
	$rows = $query->fetchAll();

// отпечатване на данните от базата

?>

<a href="cars-edit.php">добави нов</a><br><br>

<table border=2 cellpadding=2 cellspacing=3 width="60%">
	<tr>
		<th>id</th>
		<th>марка</th>
		<th>година</th>
		<th></th>
<?php
// темплейта, който е в тялото на foreach, се извиква последователно толкова пъти, колкото са редовете в базата данни
// и на местата, където е необходимо, се отпечатват данните от базата

foreach( $rows as $row ) {
	
	// htmlspecialchars служи да предотврятяване на грешки при въведени "специални" символи в базата..
	// Просто запомнете, че вашите полетата трябва да бъдат така направени преди да се отпечатат в сайта, за да няма проблеми с данните
	
	$row['id'] = htmlspecialchars( $row['id'], ENT_QUOTES );
	$row['model'] = htmlspecialchars( $row['model'], ENT_QUOTES );
	$row['year'] = htmlspecialchars( $row['year'], ENT_QUOTES );
?>

	<tr>
		<td>
				<?= $row["id"] ?>
		</td>
		<td>
				<?= $row["model"] ?>
		</td>
		<td>
				<?= $row["year"] ?> г.
		</td>
		<td>
			<a href="?delete_id=<?= $row['id'] ?>">изтриване</a>
		</td>
	</tr>

<?php
}
?>

</table>
<br>
