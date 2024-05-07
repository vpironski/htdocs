<?php
include 'connection.php';
$event_id = $_GET['event_id'];

$sql = "DELETE FROM events WHERE event_id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$event_id]);

header("location: admin.php");
?>
