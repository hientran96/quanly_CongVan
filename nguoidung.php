<?php
	require_once "config.php";
	include_once "functions.php";
	
	$sql = "SELECT * FROM nguoidung";
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
			<div class="container" style="margin: 5% 8% 2% 5%;">
			<div class="card">
				<h4 class="card-header">Quản lý người dùng</h4>
				<div class="card-body">
					<p><a class="btn btn-primary" href="nguoidung_them.php" role="button">Thêm người dùng</a></p>
					
					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="35%">Họ và tên</th>
								<th width="25%">Mã nhân viên</th>
								<th width="25%">Mật Khẩu</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($dong = mysqli_fetch_array($danhsach))
								{
									echo "<tr>";
										echo "<th>{$dong['ID']}</th>";
										echo "<td>{$dong['HoVaTen']}</td>";
										echo "<td>{$dong['Manv']}</td>";
										echo "<td>{$dong['MatKhau']}</td>";
										echo "<td class='text-center'><a href='nguoidung_sua.php?id={$dong['ID']}'><img src='img/edit.png' /></a></td>";
										echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa người dùng {$dong['HoVaTen']} không?\");' href='nguoidung_xoa.php?id={$dong['ID']}'><img src='img/delete.png' /></a></td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
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
	</body>
</html>