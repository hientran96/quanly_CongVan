<?php
  require_once "config.php";
  include_once "functions.php";
      //$id = $_GET['id'];

  $sql = "SELECT d.TenDM ,t.*,n.HoVaTen
      FROM danhmuc d , tintuc t , nguoidung n
      WHERE d.ID = t.ID_danhmuc AND n.ID=t.ID_nguoidung";
      $danhsach = mysqli_query($link, $sql);
  $dong = mysqli_fetch_array($danhsach);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Quản Lý Công văn</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/title.ico" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-custom.css" />
  </head>
  <body>
    <?php include_once "navbar.php"; ?>
      <div class="container" style="margin: 5% 8% 2% 5%;">
         <div class="card" >
        <h4 class="card-header">Sự kiện</h4>
       
            <div class="card-body">
        <?php
      
             while($dong = mysqli_fetch_array($danhsach))
              {
              echo "<div class='media'>";
                
                echo "<img class='align-self-center mr-3' src='img/{$dong['Hinhanh']}' alt='' />";
                echo " <div class='media-body'>";
                echo "<h5 class='mt-0'>{$dong['Tieude']}</h5>";
              echo "</div>";
               echo " </div>";
              }
   ?>
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>
  
  
  </body>
</html>