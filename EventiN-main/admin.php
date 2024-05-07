<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<?php
include "connection.php";

$users = $connection->query("SELECT * FROM users");
$events = $connection->query("SELECT * FROM events");
$reservations = $connection->query("SELECT reservations.*, users.username AS username, events.event_name AS event_name
                                             FROM reservations
                                             JOIN users ON reservations.user_id = users.user_id
                                             JOIN events ON reservations.event_id = events.event_id");

if(isset($_POST['addEvent'])){
    $event_name = $_POST['eventName'];
    $event_date = $_POST['eventDate'];
    $event_price = $_POST['eventPrice'];

    $sql = "INSERT INTO events (event_name, event_date, event_price) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$event_name, $event_date, $event_price]);
    header("location:../EventiN-main/admin.php");
}
if (isset($_POST['addUser'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!$isAdmin){
        $isAdmin = 0;
    }
    $isAdmin = $_POST['isAdmin'];

    $sql = "INSERT INTO users (username, password, isAdmin) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$username, $password, $isAdmin]);
    header("location:../EventiN-main/admin.php");
}
?>
<body>
<h1>Add Event</h1>
<form id="eventForm" method="post">
    <label for="eventName">Event Name:</label>
    <input type="text" id="eventName" name="eventName" autocomplete="off" required><br>
    <label for="eventDate">Event Date:</label>
    <input type="date" id="eventDate" name="eventDate" autocomplete="off" required><br>
    <label for="eventPrice">Price:</label>
    <input type="number" id="eventPrice" name="eventPrice" autocomplete="off" required><br>
    <input name="addEvent" type="submit" value="Add Event">
</form>

<h2>Current Events</h2>
<table id="eventTable">
    <tr>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <tr>
    <?php foreach ($events as $event){?>
        <tr>
            <td><?=$event["event_name"]?></td>
            <td><?= $event["event_date"]?></td>
            <td><?= $event["event_price"]?></td>
            <td><a href="delete_event.php?event_id=<?=$event['event_id']?>">Delete</a></td>
            <td><a href="edit_event.php?event_id=<?=$event['event_id']?>">Edit</a></td>
        </tr>
    <?php }?>
</table>
<h1>Add User</h1>
<form name="addUser" id="userForm" method="post">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password: </label>
    <input type="password" id="password" name="password"><br>
    <label for="isAdmin">Admin: </label>
    <input type="checkbox"  value="1" id="isAdmin" name="isAdmin"><br>
    <input name="addUser" type="submit" value="Add User">
</form>

<h2>Current Users</h2>
<table id="userTable">

    <tr>
        <th>Username</th>
        <th>Admin</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user){?>
    <tr>
        <td><?=$user["username"]?></td>
        <td><?= $user["isAdmin"] ? "Yes" : "No" ?></td>
        <td><a href="delete_user.php?user_id=<?=$user['user_id']?>">Delete</a></td>
        <td><a href="edit_user.php?user_id=<?=$user['user_id']?>">Edit</a></td>
    </tr>
    <?php }?>

</table>

<h2>User Ticket Information</h2>
<table>
    <tr>
        <th>Number of Tickets</th>
        <th>User</th>
        <th>Event</th>
        <th>Date</th>
    </tr>
    <?php foreach ($reservations as $reservation){?>
        <tr>
            <td><?=$reservation["num_tickets"]?></td>
            <td><?=$reservation["username"]?></td>
            <td><?=$reservation["event_name"]?></td>
            <td><?=$reservation["reservation_date"]?></td>
            <td><a href="delete_reservation.php?reservation_id=<?=$reservation['reservation_id']?>">Delete</a></td>
        </tr>
    <?php }?>
</table>
</body>
</html>