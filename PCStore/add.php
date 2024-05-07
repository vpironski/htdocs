<?php
$connection = new PDO('mysql:host=localhost:3306;dbname=pcstore',"root","");
// ако е натиснат бутона Запиши, се изпълнява следното

if ( $_POST ) {

    // зареждаме каквото е въведено в полетата в отделни променливи

    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $name = $_POST['name'];
    $serie = $_POST['serie'];
    $base = $_POST['base'];
    $boost = $_POST['boost'];
    $core = $_POST['core'];
    $thread = $_POST['thread'];
    $socket = $_POST['socket'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // зареждаме качената снимка

    $file = $_FILES['pic'];
    $file_name = $_FILES['pic']['name'];
    $file_temp = $_FILES['pic']['tmp_name'];
    $file_type = $_FILES['pic']['type'];

    // проверяваме дали са попълнени всички полета

    $error = "";
    $success = "";

    // ако всичко е попълнено се записват полетата в базата

    if ( !$error ) {

        // Заявка към базата, която записва данните за колата

        $query = $connection->prepare("
				INSERT INTO CPUs SET
				Manufacturer = ?,
				Model = ?,
				Name = ?,
                Serie = ?,
				BaseFrequency = ?,
				BoostFrequency = ?,
                CoreCount = ?,
				ThreadCount = ?,
				Socket = ?,
                Price = ?,
				Quantity = ?
			");
        $query->execute( [ $manufacturer, $model, $name,
            $serie, $base, $boost,
            $core, $thread, $socket,
            $price, $quantity] );

        // Взема id-то на записа

        $id = $connection->lastInsertId();

        // Качва снимката в папка "images" с име, което е номера на колата в базата ( например, 7.jpg )

        move_uploaded_file( $file_temp, "images/Products/CPUs/".$id.".jpg" );

        // Съобщение, че записа в базата е завършил успешно

        $success = "Thank you!<br>";
    }


    $manufacturer = htmlspecialchars( $manufacturer, ENT_QUOTES );
    $model = htmlspecialchars( $model, ENT_QUOTES );
    $name = htmlspecialchars( $name, ENT_QUOTES );
    $serie = htmlspecialchars( $serie, ENT_QUOTES );
    $base = htmlspecialchars( $base, ENT_QUOTES );
    $boost = htmlspecialchars( $boost, ENT_QUOTES );
    $core = htmlspecialchars( $core, ENT_QUOTES );
    $thread = htmlspecialchars( $thread, ENT_QUOTES );
    $socket = htmlspecialchars( $socket, ENT_QUOTES );
    $price = htmlspecialchars( $price, ENT_QUOTES );
    $quantity = htmlspecialchars( $quantity, ENT_QUOTES );
}

?>





<a href="admin.php">назад</a><br><br>

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

<form action="add.php" method="post" enctype="multipart/form-data">

    <!-- Year -->

    <label for="text">Manufacturer:</label><br>
    <input id="text" type="text" name="manufacturer" value="<?= @$manufacturer ?>">
    <br><br>

    <!-- Model -->

    <label for="text">Model:</label><br>
    <input id="text" type="text" name="model" value="<?= @$model ?>">
    <br><br>

    <!-- Price -->

    <label for="text">Name:</label><br>
    <input id="text" type="text" name="name" value="<?= @$name ?>">
    <br><br>

    <!-- Year -->

    <label for="text">Series:</label><br>
    <input id="text" type="text" name="serie" value="<?= @$serie ?>">
    <br><br>

    <!-- Model -->

    <label for="text">Base Frequency:</label><br>
    <input id="text" type="text" name="base" value="<?= @$base ?>">
    <br><br>

    <!-- Price -->

    <label for="text">Boost Frequency:</label><br>
    <input id="text" type="text" name="boost" value="<?= @$boost ?>">
    <br><br>

    <!-- Year -->

    <label for="text">Core Count:</label><br>
    <input id="text" type="text" name="core" value="<?= @$core ?>">
    <br><br>

    <!-- Model -->

    <label for="text">Thread Count:</label><br>
    <input id="text" type="text" name="thread" value="<?= @$thread ?>">
    <br><br>

    <!-- Price -->

    <label for="text">Socket:</label><br>
    <input id="text" type="text" name="socket" value="<?= @$socket ?>">
    <br><br>

    <!-- Year -->

    <label for="text">Price:</label><br>
    <input id="text" type="text" name="price" value="<?= @$price ?>">
    <br><br>

    <!-- Model -->

    <label for="text">Quantity:</label><br>
    <input id="text" type="text" name="quantity" value="<?= @$quantity ?>">
    <br><br>


    <!-- Picture -->

    <label for="text">Picture</label><br>
    <input id="text" type="file" name="pic">
    <br><br><br>


    <input type="submit" name="submit" value="submit">

</form>

