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
		<div class="container" style="margin: 8% 8% 5% 5%;">
			<div class="card">
				<h4 class="card-header">Đăng xuất</h4>
				<div class="card-body">
					<?php
						// Hủy SESSION
						unset($_SESSION['ID']);
						unset($_SESSION['HoVaTen']);
						unset($_SESSION['QuyenHan']);
						
						// Quay về trang chủ
						header("Location: index.php");
					?>
				</div>
			</div>
			
			
		</div>
		</hr>
		<?php include_once "footer.php"; ?>
		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>