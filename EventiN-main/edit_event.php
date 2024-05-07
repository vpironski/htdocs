<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<?php
include 'connection.php';
$event_id = $_GET['event_id'];

$sql = "SELECT * FROM events WHERE event_id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$event_id]);
$event = $stmt->fetch();

if ( isset($_POST['submit']) ) {
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_price = $_POST['event_price'];



    $sql = "UPDATE events
            SET event_name = ?,
                event_date = ?,
                event_price = ?
            WHERE event_id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->execute([$event_id, $event_name, $event_date, $event_price]);
    header("location: admin.php");
}
?>
<h1>EDIT USER</h1>
<form method="post">
    <input hidden type="text" id="id" name="id" value="<?php echo $event['event_id']?>">
    <label for="name">Event Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $event['event_name']?>">
    <label for="name">Event Date:</label>
    <input type="text" id="id" name="id" value="<?php echo $event['event_date']?>">
    <label for="name">Event Price:</label>
    <input type="text" id="name" name="name" value="<?php echo $event['event_price']?>">

    <input type="submit" name="submit" value="EDIT">
</form>
</body>
</html>
