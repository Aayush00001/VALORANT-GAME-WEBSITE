<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Use lowercase "id" here
    $sql = "DELETE FROM wallpapers WHERE id = $id"; // Use lowercase "id" here

    if ($conn->query($sql) === TRUE) 
    {
        header("location: wallpapermanage.php");
    } else 
    {
        echo "Error deleting record: ".$conn->error;
    }
}

$conn->close();
?>