<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <style> 

        .cover {
            text-align: center;
            background-color: #3d3e37;
            padding: 20px;
            border-radius: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-left: auto;
            margin-right: auto;
            margin-top:20px;
            margin-bottom: 20px;
        }

        .cover h1 {
            margin-top:20%;
            margin-bottom: 10%;
            color: #fff;

        }

        input[type="text"], input[type="file"], input[type="submit"] {
            display: block;
            margin: 10px auto;
            padding: 10px;
            border: 5px solid #000;
            border-radius: 10px;
            width: 80%;
            margin-bottom: 10%;
        }

        input[type="text"] {
            width: 100%;
        }

        .btn {
            background-color: #fff;
            color: #fff;
            cursor: pointer;
        }
        input .btn{
            margin-top: 0px;
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
    <div class="cover">
        <h1>ADD WALLPAPERS</h1>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter NAME" required/>
            <div class="input">
                <input type="file" name="photo1" required>
                <br/>
            </div>
            <input type="submit" class="btn" value="Add" name="add">
        </form>
        <?php 
        include 'connection.php';
        if(isset($_POST['add']))
        {
            $pkgnm=$_POST['name'];
           

            $pkg_img1=$_FILES['photo1']['name'];
            
            $temp_img1=$_FILES['photo1']['tmp_name'];

            move_uploaded_file($temp_img1,"../data/images/$pkg_img1");
           
            $qry="insert into wallpapers (title,image_url) values('$pkgnm','$pkg_img1')";
            if(mysqli_query($con,$qry))
            {
                echo "Images saved!!!";
            }
            else{
                echo "Try again!!!";
            }
        }
        ?>
    </div>
  </div>
</div>
  </body>
</html>