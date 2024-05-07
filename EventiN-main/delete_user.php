<?php
include 'connection.php';
$user_id = $_GET['user_id'];

$sql = "DELETE FROM users WHERE user_id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$user_id]);

header("location: admin.php");
?>
