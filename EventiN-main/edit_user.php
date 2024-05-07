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
$user_id = $_GET['user_id'];

$sql = "SELECT user_id, username, isAdmin FROM users WHERE user_id = ?";
$stmt = $connection->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if ( isset($_POST['submit']) ) {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $isAdmin = $_POST['isAdmin'];
    if(!$isAdmin){
        $isAdmin = 0;
    }



    $sql = "UPDATE users
            SET username = ?,
                isAdmin = ?
            WHERE user_id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->execute([$username,$isAdmin , $user_id]);
    header("location: admin.php");
}
?>
<h1>EDIT USER</h1>
<form method="post">
    <input hidden type="text" id="id" name="user_id" value="<?php echo $user['user_id']?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="username" value="<?php echo $user['username']?>">
    <label for="isAdmin">Admin: </label>
    <input type="checkbox"  value="1" id="isAdmin" name="isAdmin"><br>
    <input type="submit" name="submit" value="EDIT">

</form>
</body>
</html>