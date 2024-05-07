<?php

// връзка с базата данни. В dbname се пише името на базата
// в последните два параметъра са потребителско име и парола за базата. Ако не сте ги сменяли, те са: root без парола

$connection = new PDO('mysql:host=localhost:3306;dbname=cars', "root", "");
			
// ако е натиснат бутона Запиши, се изпълнява следното

if ( $_POST ) {
	
	// зареждаме каквото е въведено в полетата в отделни променливи

	$model = $_POST['model'];
	$price = $_POST['price'];
	$year = $_POST['year'];
	
	// зареждаме качената снимка
	
    $file = $_FILES['pic'];
	$file_name = $_FILES['pic']['name'];
	$file_temp = $_FILES['pic']['tmp_name'];
	$file_type = $_FILES['pic']['type'];
	
	// проверяваме дали са попълнени всички полета
	
	$error = "";
	$success = "";
	
	if ( ! $model ) {
		
		$error .= "Попълнете марка<br>";
	}
	
	if ( ! $price ) {
		
		$error .= "Попълнете цена<br>";
	}
	
	if ( ! $year ) {
		
		$error .= "Попълнете година<br>";
	}
	
	if ( $file_type != "image/jpeg" && $file_type != "image/png" ) {
		
		$error .= "Качете снимка<br>";
	}

	// ако всичко е попълнено се записват полетата в базата
	
	if ( !$error ) {
	
			// Заявка към базата, която записва данните за колата

			$query = $connection->prepare("
				INSERT INTO cars SET
				year = ?,
				model = ?,
				price = ?
			");
			$query->execute( [ $year, $model, $price ] );

			// Взема id-то на записа

			$id = $connection->lastInsertId();
			
			// Качва снимката в папка "images" с име, което е номера на колата в базата ( например, 7.jpg )
			
			move_uploaded_file( $file_temp, "images/".$id.".jpg" );
			
			// Съобщение, че записа в базата е завършил успешно

			$success = "Благодаря!<br>";
	}
	
	// htmlspecialchars служи да предотврятяване на грешки при въведени "специални" символи в базата..
	// Просто запомнете, че вашите полетата трябва да бъдат така направени преди да се отпечатат в сайта, за да няма проблеми с данните
	
	$model = htmlspecialchars( $model, ENT_QUOTES );
	$year = htmlspecialchars( $year, ENT_QUOTES );
	$price = htmlspecialchars( $price, ENT_QUOTES );
}


?>

<a href="cars-list.php">назад</a><br><br>

<?php
if ( @$error ) {
?>
	<b style="color:red;"><?= $error ?></b><br>
<?php
}
if ( @$success ) {
?>
	<b style="color:green;"><?= $success ?></b><br>
<?php
}
?>

<form action="cars-edit.php" method="post" enctype="multipart/form-data">

	<!-- Year -->

	<label for="text">Year:</label><br>
	<input id="text" type="text" name="year" value="<?= @$year ?>">
	<br><br>

	<!-- Model -->

    <label for="text">Model:</label><br>
	<input id="text" type="text" name="model" value="<?= @$model ?>">
	<br><br>

	<!-- Price -->

    <label for="text">Price:</label><br>
	<input id="text" type="text" name="price" value="<?= @$price ?>">
	<br><br>
	
	<!-- Picture -->
	
    <label for="text">Picture</label><br>
	<input id="text" type="file" name="pic">
	<br><br><br>


	<input type="submit" name="submit" value="Запиши">

</form>
