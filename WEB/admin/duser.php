<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .admin-dashboard {
            width: 40%;
            height:20%;
            margin: 50px auto;
            padding: 20px;
            border: 5px solid #0000ff;
            background-color: #000;
            border-radius:20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .total-users-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .user-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .user-icon img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .user-info h2 {
            color:#0000ff;
            font-size: 30px;
            margin-bottom: 10px;
        }

        p {
            color:#0000ff;
            font-size: 30px;
            margin: 0;
        }
        .part{
            display:flex;
        }
    </style>
</head>
<body>
<?php include "aheader.php"; ?>
    <div class="part">
    <?php include "asidebar.php"; ?>
    <div class="admin-dashboard">
        <?php
        // Database connection setup (replace with your connection details)
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "web";
        
        $connection = mysqli_connect($host, $username, $password, $database);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch total signup users based on options
        $option = isset($_GET['option']) ? $_GET['option'] : 1;

        if ($option == 1) {
            $query = "SELECT COUNT(id) AS total_users FROM signup";
        } elseif ($option == 2) {
            // Modify the query based on your option 2 criteria
            // $query = "SELECT COUNT(id) AS total_users FROM users WHERE ...";
        } elseif ($option == 3) {
            // Modify the query based on your option 3 criteria
            // $query = "SELECT COUNT(id) AS total_users FROM users WHERE ...";
        }

        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $totalUsers = $row['total_users'];

        // Close the database connection
        mysqli_close($connection);
        ?>

        <div class="total-users-box">
            <div class="user-icon">
                <img src="../data/images/user.png" alt="User Icon">
            </div>
            <div class="user-info">
                <h2>Total Signup Users</h2>
                <p><?php echo $totalUsers; ?></p>
            </div>
        </div>
        <!-- Other dashboard components can be added here -->
    </div>
    </div>
</body>
</html>
