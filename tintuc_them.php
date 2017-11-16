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
				<h4 class="card-header">Thêm tin tức</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['ID_danhmuc']))
						{
							$ID_danhmuc = addslashes($_POST['ID_danhmuc']);
							$Tieude = addslashes($_POST['Tieude']);
							$Tomtat = addslashes($_POST['Tomtat']);
							$Noidung = addslashes($_POST['Noidung']);
							
							$ID_nguoidung =$_SESSION['ID'];
								if(trim($Tieude) == "")
								ThongBaoLoi("Tiêu đề không được bỏ trống!");
							else
								if(trim($Tomtat) == "")
								ThongBaoLoi("Tóm tắt không được bỏ trống!");
							else
								if(trim($Noidung) == "")
								ThongBaoLoi("Nội dung không được bỏ trống!");
else
{
	$sql = "INSERT INTO `tintuc`(`Tieude`, `ID_danhmuc`, `ID_nguoidung`, `Ngaydang`, `Tomtat`, `Noidung`) 
	VALUES ('$Tieude',$ID_danhmuc,$ID_nguoidung,now(),'$Tomtat','$Noidung')";
	$kq = mysqli_query($link, $sql);
								if($kq)
									ThongBao("Đăng tin tức thành công");
								
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
					?>
					<form method="post" action="tintuc_them.php">
						<div class="form-group">
							<label for="ID_danhmuc">Danh mục</label>
							<select  class="form-control" id="ID_danhmuc" name="ID_danhmuc" required >
							<option>--Chọn danh mục-- </option>
							<?php
									$sql = "SELECT * FROM danhmuc";
									$danhsach = mysqli_query($link, $sql);							
									while($dong = mysqli_fetch_array($danhsach))
									{
										echo "<option value={$dong['ID']}>{$dong['TenDM']}</option>";																	
									}
							?>
							</select>
						</div>	
						
						<div class="form-group">
							<label for="Tieude">Tiêu đề</label>
							<input type="text" class="form-control" id="Tieude" name="Tieude" placeholder="" required />
						</div>							
						<div class="form-group">
							<label for="Tomtat">Tóm tắt</label>
							<textarea class="form-control" id="Tomtat" name="Tomtat" placeholder="" required ></textarea>
						</div>	
						<div class="form-group">
							<label for="Noidung">Nội dung</label>
							<textarea class="form-control ckeditor" id="Noidung" name="Noidung" placeholder="" required ></textarea>
						</div>	
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
						
					</form>
				</div>
			</div>
			
			<hr />
			<footer>Bản quyền &copy; <?php echo date("Y") ?> bởi DH15TH.</footer>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
	</body>
</html>