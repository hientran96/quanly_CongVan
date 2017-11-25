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
		<div class="container">
			

			<div class="card">
				<h4 class="card-header">Sửa tin tức</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['Tieude'])) // Nếu nhấn nút "Cập nhật"
						{
							$ID = addslashes($_POST['ID']);
							$Hinhanh= addslashes($_POST['Hinhanh']);
							$TenDM = addslashes($_POST['ID_danhmuc']);
							$Tieude= addslashes($_POST['Tieude']);
							$Tomtat= addslashes($_POST['Tomtat']);

							if(trim($Tieude) == "")
								ThongBaoLoi("Tên tiêu đề không được bỏ trống!");
							else
							{
								$sql = "UPDATE tintuc SET ID_danhmuc= '$TenDM',Tieude='$Tieude' ,Tomtat='$Tomtat'WHERE ID = $ID";
								$kq = mysqli_query($link, $sql);
								if($kq)
									header("Location:tintuc.php");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("danh mục <strong>$Tieude</strong> đã tồn tại!");
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
							<div class="form-group col-md-6" >
							<label for="Hinhanh">Hình ảnh</label>
							<input type="text" class="form-control" id="Hinhanh" name="Hinhanh" value="<?php echo $dong['Hinhanh'] ?>" placeholder="" required />
							
						</div>
								<div class="form-group col-md-6">
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
								<div class="form-group col-md-6" >
							<label for="Tieude">Tiêu đề</label>
							<input type="text" class="form-control" id="Tieude" name="Tieude" value="<?php echo $dong['Tieude'] ?>" placeholder="" required />
							
						</div>
								<div class="form-group ">
									<label for="Tomtat">Tóm tắt</label>
									<input type="text" class="form-control" id="Tomtat" name="Tomtat" value="<?php echo $dong['Tomtat'] ?>" placeholder="" required />
								</div>

								<button type="submit" class="btn btn-primary">Cập nhật</button>
							</form>
					<?php
						}
					?>
				</div>
			</div>
		</div>

	<?php include_once "footer.php"; ?>
	</body>
</html>
