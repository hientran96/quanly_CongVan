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
				<h4 class="card-header">Sửa tin tức</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['Tieude'])) // Nếu nhấn nút "Cập nhật"
						{
							$ID = addslashes($_POST['ID']);
							$ID_danhmuc = addslashes($_POST['ID_danhmuc']);
							$Hinhanh = addslashes($_POST['Hinhanh']);
							$Tieude = addslashes($_POST['Tieude']);
							$Tomtat = addslashes($_POST['Tomtat']);
							$Noidung = addslashes($_POST['Noidung']);
							
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
								$sql = "
								UPDATE `tintuc` SET `Hinhanh`=$Hinhanh,`Tieude`=$Tieude,`ID_danhmuc`=$ID_danhmuc,`ID_nguoidung`=ID_nguoidung,`Ngaydang`=$Ngaydang,`Tomtat`=$Tomtat,`Noidung`=$Noidung WHERE ID=$ID";
								$kq = mysqli_query($link, $sql);
								if($kq)
									header("Location: tintuc.php");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("tin tức <strong>$Tieude</strong> đã tồn tại!");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
						else // Lấy dữ liệu "đổ" vào form
						{
								// Lấy id từ thanh địa chỉ
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM tintuc WHERE ID = $id";
							$danhsach = mysqli_query($link, $sql);
							
							// Vì chỉ trả về 1 dòng nên không cần vòng lặp while
							$dong = mysqli_fetch_array($danhsach);
						
					?>
					<form method="post" action="tintuc_sua.php">
						<input type="hidden" id="ID" name="ID" value="<?php echo $dong['ID'] ?>" />
						
						<div class="form-group">
							<label for="Hinhanh">Hình ảnh </label>
							<div class="input-group mb-2 mb-sm-0">
								<div class="input-group-addon"><a href="#" onclick="BrowseServer();">Chọn hình</a></div>

								<input type="text" class="form-control" id="Hinhanh" name="Hinhanh" value="<?php echo $dong['Hinhanh'] ?>" placeholder="" required />
							
							</div>
						</div>
						<div class="form-group " >
							<label for="Tomtat">Tóm tắt</label>
							<input type="text" class="form-control" id="Tomtat" name="Tomtat" value="<?php echo $dong['Tomtat'] ?>" placeholder="" required />
							
						</div>
						<div class="form-group " >
							<label for="Noidung">Nội dung</label>
							<input type="text" class="form-control" id="Noidung " name="Noidung" value="<?php echo $dong['Noidung'] ?>" required />
							
						</div>
					<div class="form-group">
							<label for="ID_danhmuc">Danh mục</label>
							<select  class="form-control" id="ID_danhmuc" name="ID_danhmuc" required >
							
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
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
					</form>
					<?php
						}
					?>
				</div>
			</div>
			
			<hr />
			
		</div>
		<?php include_once "footer.php"; ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	</body>
</html>