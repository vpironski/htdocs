<?php
include 'connection.php';
$reservation_id = $_GET['reservation_id'];

$sql = "DELETE FROM reservations WHERE reservation_id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$reservation_id]);

header("location: admin.php");
?>
