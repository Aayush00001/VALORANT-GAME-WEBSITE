<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <style> 
      .wallpaper-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 20px;
      padding: 20px;
      width: 100%;
      height: 100%;
    }
  .wallpaper-item {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 60%;
    overflow: hidden;
}
  .wallpaper-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}.wallpaper-container .btn {
  position: absolute;
  top: 82%;
  left:25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.wallpaper-container .btn:hover {
  background-color: black;
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
<!--main contente-->
<div class="wallpaper-container">
  <?php
  include 'connection.php';
  $sql="select * from wallpapers";
  $results=mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($results,MYSQLI_BOTH))
  {
  ?>
    <div class="wallpaper-item">
      <img class="wallpaper-image" src="..\data\images\<?=$row['image_url'];?>" alt="Valorant Wallpaper 1">
      <a href="../admin/wallpaperdelete.php?id=<?=$row['id'];?>" class="btn">Delete</a>
    </div>
    <?php
  }?>
</div>
</div>