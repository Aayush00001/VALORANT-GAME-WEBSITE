<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement to create the wallpapers table
$sql = "CREATE TABLE wallpapers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
)";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Table 'wallpapers' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
