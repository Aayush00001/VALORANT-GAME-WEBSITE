<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Management Table</title>
    <style>
           body {
            font-family: Arial, sans-serif;
        }
        .container-fluid{
            max-width: 800px;
            margin-top: 100px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 2px solid #000;
        }
        th, td{
            border: 1px solid #000;
            padding: 14px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a.delete {
            text-decoration: none;
            color: red;
        }
        a.view {
            text-decoration: none;
            color: red;
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
        <div class="container-fluid">
        <h1>Feedback Management</h1>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>feedbacks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "web";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch feedback data from the database
                $sql = "SELECT * FROM feedback";
                $result = $conn->query($sql);

                if ($result->num_rows > 0)
                {
                    while ($row = $result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['putfeedback']}</td>";
                        echo "<td><a class='view' href='fview.php?id={$row['id']}'>view</a></td>";
                        echo "<td><a class='delete' href='fdelete.php?id={$row['id']}'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                else 
                {
                    echo "<tr><td colspan='6'>No feedback found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        </div>
        </div>    
</body>
</html>