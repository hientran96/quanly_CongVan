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
			<div class="container" style="margin: 5% 8% 2% 5%;">
			<div class="card">
				<h4 class="card-header">Đổi mật khẩu</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['MatKhau']))
						{
							$MatKhau = trim($_POST['MatKhau']);
							$MatKhauMoi = trim($_POST['MatKhauMoi']);
							$XacNhanMatKhauMoi = trim($_POST['XacNhanMatKhauMoi']);
							
							if(empty($MatKhau))
								ThongBaoLoi("Mật khẩu cũ không được bỏ trống!");
							elseif(empty($MatKhauMoi))
								ThongBaoLoi("Mật khẩu mới không được bỏ trống!");
							elseif(empty($XacNhanMatKhauMoi))
								ThongBaoLoi("Xác nhận mật khẩu mới không được bỏ trống!");
							elseif($MatKhauMoi != $XacNhanMatKhauMoi)
								ThongBaoLoi("Xác nhận mật khẩu mới không chính xác!");
							else
							{
								// Kiểm tra mật khẩu cũ có đúng không?
								$id = $_SESSION['ID'];
								$sql_kiemtra = "SELECT * FROM `nguoidung` WHERE ID = $id";
								$nguoidung = mysqli_query($link, $sql_kiemtra);
								
								// Vì chỉ trả về 1 dòng nên không cần vòng lặp
								$dong = mysqli_fetch_array($nguoidung);
								
								if(sha1($MatKhau) != $dong['MatKhau'])
									ThongBaoLoi("Mật khẩu cũ không chính xác!");
								else
								{
									$MatKhauMoi = sha1($MatKhauMoi);
									
									$sql = "UPDATE `nguoidung` SET `MatKhau` = '$MatKhauMoi' WHERE ID = $id";
									$kq = mysqli_query($link, $sql);
									if($kq)
										ThongBao("Đổi mật khẩu thành công!");
									else
										ThongBaoLoi(mysqli_error($link));
								}
							}
						}
					?>
					<form method="post" action="doimatkhau.php">
						<div class="form-group">
							<label for="MatKhau">Mật khẩu cũ</label>
							<input type="password" class="form-control" id="MatKhau" name="MatKhau" placeholder="" required />
						</div>
						<div class="form-group">
							<label for="MatKhauMoi">Mật khẩu mới</label>
							<input type="password" class="form-control" id="MatKhauMoi" name="MatKhauMoi" placeholder="" required />
						</div>
						<div class="form-group">
							<label for="XacNhanMatKhauMoi">Xác nhận mật khẩu mới</label>
							<input type="password" class="form-control" id="XacNhanMatKhauMoi" name="XacNhanMatKhauMoi" placeholder="" required />
						</div>
						
						<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
					</form>
				</div>
			</div>
			
			<hr />
			
		</div>
		
		<?php include_once "footer.php"; ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
	</body>
</html>