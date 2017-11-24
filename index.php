<?php
  require_once "config.php";
  include_once "functions.php";
    $sql = "SELECT d.TenDM ,t.*,n.HoVaTen
      FROM danhmuc d , tintuc t , nguoidung n
      WHERE d.ID = t.ID_danhmuc AND n.ID=t.ID_nguoidung";
      $danhsach = mysqli_query($link, $sql);
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      
      
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/slider-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider-3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-fluid" style="width: 80%;margin-top: 10px;">
      <div class="card" >
        <h4 class="card-header">TIN TỨC VÀ SỰ KIỆN</h4>
        <div class="card-body">
          <?php
            while($dong = mysqli_fetch_array($danhsach))
            {
          
            echo "<div class='media'>";
          
                echo "<p ><img class='align-self-center mr-3' src='img/{$dong['Hinhanh']}' style='width:160px;height:100px;' alt='' /></p>";
               echo " <div class='media-body'>";
                 echo " <h5 class='mt-0'>{$dong['Tieude']}</h5>";
                  echo "{$dong['Tomtat']}";
                 echo "<a href='tintuc_xem.php?id={$dong['ID']}'>xem Thêm</a>";
               echo " </div>";
              echo "</div>";
              
              }
          ?>
        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>