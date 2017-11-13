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
			<div class="card">
				<h4 class="card-header">Xóa người dùng</h4>
				<div class="card-body">
					<?php
						// Lấy id từ thanh địa chỉ
						$id = $_GET['id'];
						
						$sql = "DELETE FROM nguoidung WHERE ID = $id";
						$kq = mysqli_query($link, $sql);
						if($kq)
							header("Location: nguoidung.php");
						else
							ThongBaoLoi(mysqli_error($link));
					?>
				</div>
			</div>
			
			<hr />
		
		</div>
		<?php include_once "footer.php"; ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>