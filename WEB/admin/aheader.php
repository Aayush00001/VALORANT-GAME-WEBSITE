<?php
   session_start();
   if(!isset($_SESSION['AdminLoginId']))
   {
       header("location: adminlogin.php");
   }
?>
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    body
    {
        margin:0px;
    }
.headerr
{
    font-family: poppins;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 60px;
    background-color: #204969;
    color:#fff;
}
div.headerr button{
    background-color: #f0f0f0;
    font-size: 16px;
    font-weight: 550;
    padding: 8px 12px;
    border-radius: 14px;
    border: 2px solid black;
}    
</style>
<body>
<div class="headerr">
        <h2>Welcome To Advance Admin Panel - <?php echo $_SESSION['AdminLoginId']?></h2>
        <form method="POST">
            <button name="Logout">Log Out</button>
        </form>
    </div>
    <?php 
    if(isset($_POST['Logout'])){
        header("location: adminlogin.php");
        session_destroy();
    }
?>
</body>
</html>