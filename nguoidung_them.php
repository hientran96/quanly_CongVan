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
				<h4 class="card-header">Đăng ký thành viên</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['Manv']))
						{
							$HoVaTen = addslashes($_POST['HoVaTen']);
							$Manv = addslashes($_POST['Manv']);
							$ID_chucvu = addslashes($_POST['ID_chucvu']);
							$MatKhau = addslashes($_POST['MatKhau']);
							$XacNhanMatKhau = addslashes($_POST['XacNhanMatKhau']);
							
							
							if(trim($HoVaTen) == "")
								ThongBaoLoi("Họ và tên không được bỏ trống!");
							elseif(trim($Manv) == "")
								ThongBaoLoi("Mã nhân viên không được bỏ trống!");
							

							elseif(trim($MatKhau) == "")
								ThongBaoLoi("Mật khẩu không được bỏ trống!");
						
							elseif(trim($XacNhanMatKhau) == "")
								ThongBaoLoi("Xác nhận mật khẩu không được bỏ trống!");
							elseif($MatKhau != $XacNhanMatKhau)
								ThongBaoLoi("Xác nhận mật khẩu không chính xác!");
							else
							{
								
								$MatKhau=sha1($MatKhau);
								$sql = "INSERT INTO nguoidung(Manv,ID_chucvu,HoVaTen,MatKhau,QuyenHan, Khoa) 
										VALUES ('$Manv','$ID_chucvu','$HoVaTen','$MatKhau', 2, 0)";
								$kq = mysqli_query($link, $sql);
								if($kq)
									ThongBao("Đăng ký thành công!");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("Tài khoản <strong>$Manv</strong> đã tồn tại!");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
					?>
					<form method="post" action="nguoidung_them.php">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="HoVaTen">Họ và tên</label>
								<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" placeholder="" required />
							</div>
							<div class="form-group col-md-6">
								<label for="Manv">Mã nhân viên</label>
								<input type="text" class="form-control" id="Manv" name="Manv" placeholder="" required />
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
							<div class="form-group col-md-6" >
							<label for="ID_chucvu">Chức vụ</label>
							<select  class="form-control" id="ID_chucvu" name="ID_chucvu" required >
							<option>--Chọn Chức vụ-- </option>
							<?php
									$sql = "SELECT * FROM chucvu";
									$danhsach = mysqli_query($link, $sql);							
									while($dong = mysqli_fetch_array($danhsach))
									{
										echo "<option value={$dong['ID']}>{$dong['TenCV']}</option>";																	
									}
							?>
							</select>
						</div>	
						</div>
						
						<button type="submit" class="btn btn-primary">Đăng ký</button>
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