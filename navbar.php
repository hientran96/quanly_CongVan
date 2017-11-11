<img src="img/congvan.png" class="img-fluid" alt="Responsive image">

<nav class="navbar navbar-expand-lg navbar-Secondary" style="background-color:#064762;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Giới Thiệu</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="gioithieulichsu.php">Lịch Sử</a>
          <a class="dropdown-item" href="#">Cơ cấu tổ chức</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tin tức</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tin nổi bậc trong tuần</a>
          <a class="dropdown-item" href="#">Hoạt động của công ty</a>
          <a class="dropdown-item" href="#">Tin tài chính tổng hợp</a>
          
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Văn bản</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Công văn đi</a>
          <a class="dropdown-item" href="#">Công văn đến</a>
          <a class="dropdown-item" href="#">Văn bản cá nhân</a>
          
          
        </div>
      </li>
      
    </ul>
    
    
    <ul class="navbar-nav ml-auto">
      <?php
      if(!isset($_SESSION['ID']))
      {
      ?>
      
      <li class="nav-item"><a class="nav-link" href="dangnhap.php">Đăng nhập</a></li>
      <?php
      }
      else
      {
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['HoVaTen']; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Đổi mật khẩu</a>
          <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>
          <a class="dropdown-item" href="#">Đăng bài viết</a>
          
        </div>
      </li>
      <?php
      if($_SESSION['QuyenHan'] == 1)
      {
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        
          <a class="dropdown-item" href="#">Quản lý người dùng</a>
          <a class="dropdown-item" href="#">Bài viết của tôi</a>
        </div>
      </li>
      <?php
      }
      ?>
      <li class="nav-item"><a class="nav-link" href="dangxuat.php">Đăng xuất</a></li>
      <?php
      }
      ?>
      
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>