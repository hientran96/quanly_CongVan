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
				<h4 class="card-header">Sửa người dùng</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['HoVaTen'])) // Nếu nhấn nút "Cập nhật"
						{
							$ID = addslashes($_POST['ID']);
							$HoVaTen = addslashes($_POST['HoVaTen']);
							$ID_chucvu= addslashes($_POST['ID_chucvu']);
							
							if(trim($HoVaTen) == "" )
								ThongBaoLoi("Trường không được bỏ trống!");
							else
							{
								$sql = "UPDATE nguoidung SET ID_chucvu='$ID_chucvu',HoVaTen = '$HoVaTen'WHERE ID = $ID";
								$kq = mysqli_query($link, $sql);
								if($kq)
									header("Location: nguoidung.php");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("người dùng <strong>$HoVaTen</strong> đã tồn tại!");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
						else // Lấy dữ liệu "đổ" vào form
						{
							// Lấy id từ thanh địa chỉ
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM nguoidung WHERE ID = $id";
							$danhsach = mysqli_query($link, $sql);
							
							// Vì chỉ trả về 1 dòng nên không cần vòng lặp while
							$dong = mysqli_fetch_array($danhsach);
						
					?>
					<form method="post" action="nguoidung_sua.php">
						<input type="hidden" id="ID" name="ID" value="<?php echo $dong['ID'] ?>" />
						<div class="form-group col-md-6" >
							<label for="HoVaTen">Tên người dùng</label>
							<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?php echo $dong['HoVaTen'] ?>" placeholder="" required />
							
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