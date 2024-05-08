    <?php include 'header.html';?>

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
          <img class="wallpaper-image" src="data\images\<?=$row['image_url'];?>" alt="Valorant Wallpaper 1">
          <a href="data\images\<?=$row['image_url'];?>" class="btn" download>DOWNLOAD</a>
        </div>
        <?php
      }?>
       
    </div>

    <?php include 'footer.html';?>