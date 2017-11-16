<?php
  require_once "config.php";
  include_once "functions.php";
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
    <div class="container-fluid" style="width: 80%;margin-left: 0.5%;">
      <div class="card" >
        <h4 class="card-header">SỰ KIỆN NỖI BẬT</h4>
        <div class="card-body">
          <p class="card-text">
            <div class="media">
              <a href="tintuc_xem.php"><img class="align-self-center mr-3" src="img/tintuc.jpg" alt="Generic placeholder image" style="width: 150px;"></a>
              <div class="media-body">
                <a href="#"><h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5></a>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT<a href="#">Xem thêm</a></p>
                
              </div>
            </div>
           <div class="media" style="margin-top: 5px;">
              <a href="#"><img class="align-self-center mr-3" src="img/tintuc.jpg" alt="Generic placeholder image" style="width: 150px;"></a>
              <div class="media-body">
                <a href="#"><h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5></a>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT<a href="#">Xem thêm</a></p>
                
              </div>
            </div>
            <div class="media">
              <img class="align-self-center mr-3" src="img/tintuc.jpg" alt="Generic placeholder image" style="width: 150px;">
              <div class="media-body">
                <h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT</p>
                <p class="mb-0">Căn cứ kết luận của Hiệu trưởng tại buổi họp duyệt kế hoạch năm học của Phòng Hành chính - Tổng hợp ngày 26/9/2016;
                Để công tác văn thư, hành chính của Trường đi vào nề nếp, Ban Giám hiệu thông báo một số nội dung trong công tác văn thư hành chính của Trường </p>
              </div>
            </div>
          </p>
        </div>
      </div>
      <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
        <h4 class="card-header">LOẠI CÔNG VĂN</h4>
        <div class="card-body">
          <p class="card-text">
            <div class="media">
              <img class="align-self-center mr-3" src="img/sukien.jpg" alt="Generic placeholder image" style="width: 150px;">
              <div class="media-body">
                <h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT</p>
                <p class="mb-0">Căn cứ kết luận của Hiệu trưởng tại buổi họp duyệt kế hoạch năm học của Phòng Hành chính - Tổng hợp ngày 26/9/2016;
                Để công tác văn thư, hành chính của Trường đi vào nề nếp, Ban Giám hiệu thông báo một số nội dung trong công tác văn thư hành chính của Trường </p>
              </div>
            </div>
            <div class="media">
              <img class="align-self-center mr-3" src="img/sukien1.jpg" alt="Generic placeholder image" style="width: 150px;">
              <div class="media-body">
                <h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT</p>
                <p class="mb-0">Căn cứ kết luận của Hiệu trưởng tại buổi họp duyệt kế hoạch năm học của Phòng Hành chính - Tổng hợp ngày 26/9/2016;
                Để công tác văn thư, hành chính của Trường đi vào nề nếp, Ban Giám hiệu thông báo một số nội dung trong công tác văn thư hành chính của Trường </p>
              </div>
            </div>
            <div class="media">
              <img class="align-self-center mr-3" src="img/sukien2.jpg" alt="Generic placeholder image" style="width: 150px;">
              <div class="media-body">
                <h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT</p>
                <p class="mb-0">Căn cứ kết luận của Hiệu trưởng tại buổi họp duyệt kế hoạch năm học của Phòng Hành chính - Tổng hợp ngày 26/9/2016;
                Để công tác văn thư, hành chính của Trường đi vào nề nếp, Ban Giám hiệu thông báo một số nội dung trong công tác văn thư hành chính của Trường </p>
              </div>
            </div>
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="width: 20%; margin-top: -84.3%; margin-right: 0.5%;margin-bottom: 30%;">
      <div class="card">
        <h4 class="card-header">THÔNG TIN </h4>
        <div class="card-body">
          <p class="card-text">
            <div class="media">
              <img class="align-self-center mr-3" src="img/sukien.jpg" alt="Generic placeholder image" style="width: 50px;">
              <div class="media-body">
                <h5 class="mt-0">Thông báo về công tác văn thư, hành chính của Trường Đại học An Giang</h5>
                <p>Quyết định v/v công bố thủ tục hành chính mới ban hành thuộc  phạm vi chức năng quản lý của Bộ GD&ĐT</p>
                <p class="mb-0">Căn cứ kết luận của Hiệu trưởng tại buổi họp duyệt kế hoạch năm học của Phòng Hành chính - Tổng hợp ngày 26/9/2016;
                Để công tác văn thư, hành chính của Trường đi vào nề nếp, Ban Giám hiệu thông báo một số nội dung trong công tác văn thư hành chính của Trường </p>
              </div>
            </div>
            
          </p>
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>