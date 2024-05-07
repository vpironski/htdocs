<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcstore";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// sql to delete a record

$id = $_GET['id'];
        $sql = 'DELETE FROM CPUs WHERE CPUid LIKE  "%'.$id.'%";';

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connection->error;
}

$connection->close();
?>



