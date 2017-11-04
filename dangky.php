<?php
require_once "config.php";
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản Lý Công văn</title>
    <link rel="shortcut icon"  href="img/title.ico">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
  <body>
    
    <?php include_once "navbar.php"; ?>
			<div class="card" style="margin-top: 30px;">
				<h4 class="card-header">Đăng ký thành viên</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['HoVaTen']))
						{
							$HoVaTen = addslashes($_POST['HoVaTen']);
							$TenDangNhap = addslashes($_POST['TenDangNhap']);
							$MatKhau = addslashes($_POST['MatKhau']);
							$XacNhanMatKhau = addslashes($_POST['XacNhanMatKhau']);
							$Chucvu = addslashes($_POST['Chucvu']);
							
							$Email = addslashes($_POST['Email']);
							$Dienthoai = addslashes($_POST['Dienthoai']);
					

							
							if(trim($HoVaTen) == "")
								ThongBaoLoi("Họ và tên không được bỏ trống!");
							elseif(trim($TenDangNhap) == "")
								ThongBaoLoi("Tên đăng nhập không được bỏ trống!");
							elseif(trim($MatKhau) == "")
								ThongBaoLoi("Mật khẩu không được bỏ trống!");
							elseif(trim($XacNhanMatKhau) == "")
								ThongBaoLoi("Xác nhận mật khẩu không được bỏ trống!");
							elseif($MatKhau != $XacNhanMatKhau)
								ThongBaoLoi("Xác nhận mật khẩu không chính xác!");
							else
							{
								
								
								$sql = 	"INSERT INTO nguoidung(HoVaTen, TenDangNhap, MatKhau, QuyenHan, Khoa, Chucvu, Manv, Email, Dienthoai,  Maphong, MaCV) 
										VALUES ('$HoVaTen', '$TenDangNhap', '$MatKhau', 2, 0,'$Chucvu','','$Email','$Dienthoai','','')";
								$kq = mysqli_query($link, $sql);
								if($kq)
									ThongBao("Đăng ký thành công!");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("Tài khoản <strong>$TenDangNhap</strong> đã tồn tại!");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
					?>
					<form method="post" action="dangky.php">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="HoVaTen">Họ và tên</label>
								<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" placeholder="" required />
							</div>
							<div class="form-group col-md-6">
								<label for="TenDangNhap">Tên đăng nhập</label>
								<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" placeholder="" required />
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="MatKhau">Mật khẩu</label>
								<input type="password" class="form-control" id="MatKhau" name="MatKhau" placeholder="" required />
							</div>
							<div class="form-group col-md-6">
								<label for="XacNhanMatKhau">Xác nhận mật khẩu</label>
								<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" placeholder="" required />
							</div>
						</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Chucvu">Chức vụ</label>
								<input type="text" class="form-control" id="Chucvu" name="Chucvu" placeholder="" required />
							</div>
							<div class="form-group col-md-6">
								<label for="Email">Email</label>
								<input type="text" class="form-control" id="Email" name="Email" placeholder="" required />
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="Dienthoai">SĐT</label>
								<input type="text" class="form-control" id="Dienthoai" name="Dienthoai" placeholder="" required />
							</div>
							
						</div>
						<button type="submit" class="btn btn-primary">Đăng ký</button>
					</form>
				</div>
			</div>
			
			<hr />
			<?php include_once "footer.php"; ?>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>