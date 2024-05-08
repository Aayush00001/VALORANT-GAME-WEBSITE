<!DOCTYPE html>
<html>
<head>
    <title>VALORANT</title>
    <link rel="icon" href="data\images\logo8.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="data/css/style.css" rel="Stylesheet">
</head>
<body>

<!-- navbar section -->
<div class="logoo">
    <nav>
        <div class="logo1">
            <a href="Home.html">
                <img src="data\images\logo.png">
            </a>
        </div>
    </nav>

    <!-- main content -->
    <div class="row">
        <div class="col-xl-6 col-lg-6"></div>
        <div class="col-xl-6 col-lg-6">
            <section>
                <div class="login-box">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Get the form data
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Database connection parameters
                        $host = 'localhost';
                        $dbusername = 'root';
                        $dbpassword = '';
                        $dbname = 'web';

                        // Create a database connection
                        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

                        // Check for a successful connection
                        if ($conn->connect_error) {
                            die('Connection Failed: ' . $conn->connect_error);
                        }

                        // Check user credentials against the database
                        $sql = "SELECT * FROM signup WHERE username = ? AND password = ?";
                        if ($stmt = $conn->prepare($sql)) {
                            $stmt->bind_param("ss", $username, $password);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows == 1) {
                                // Successful login
                                $_SESSION['username'] = $username; // Store the username in the session
                                header("location: about.php"); // Redirect to the protected page
                                exit();
                            } else {
                                // Invalid credentials
                                echo "<script>alert('Invalid Password');</script>";
                            }

                            $stmt->close();
                        } else {
                            echo '<p class="error-message">An error occurred. Please try again.</p>';
                        }

                        // Close the database connection
                        $conn->close();
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <h2>Login</h2>
                        <div class="input-box">
                            <input type="text" name="username" required>
                            <label>User Name</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="btn-login">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

<!--footer section-->
<footer class="bg-dark text-center text-white">
    <div class="touch">
        KEEP IN TOUCH WITH US 
    </div>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-youtube"></i>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
        <i class="fab fa-github"></i>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="fab fa-linkedin-in"></i>
      </a>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright DON'T COPY . All Rights Reserved
    </div>
</footer>

</body>
</html>