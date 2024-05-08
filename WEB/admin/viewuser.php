<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5; /* Background color for the entire page */
        }

        .center {
            text-align: center;
            background-color: #ffffff; /* Background color for the content */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add a subtle shadow to the content */
        }

        table {
            border-collapse: collapse;
            width: 50%; /* Adjust the width as needed */
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #333; /* Border color for table cells */
            padding: 10px;
            background-color: #f9f9f9; /* Background color for table cells */
        }

        th {
            background-color: #333; /* Background color for table header cells */
            color: #fff; /* Text color for table header cells */
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
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
    $Id = $_GET['id'];
    $sql = "SELECT * FROM signup WHERE id = $Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userId = $row['id'];
            $userName = $row['username'];
            // Add more fields as needed

            // JavaScript to open a pop-up window
            echo "<script>";
            echo "var userDetails = 'User ID: $userId\\nUser Name: $userName';";
            echo "if (confirm(userDetails)) {";
            echo "   window.location.href = 'ausermanage.php';"; // Redirect to user management page on OK
            echo "}";
            echo "</script>";
        }
    } else {
        echo "<div class='center'>";
        echo "<h2>User not found</h2>";
        echo "</div>";
    }
}

$conn->close();
?>
</body>
</html>
