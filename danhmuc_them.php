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
		<title>iNews</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/inews.png" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-custom.css" />
	</head>
	<body>
		<div class="container">
			<?php include_once "navbar.php"; ?>

			<div class="card">
				<h4 class="card-header">Thêm danh muc</h4>
				<div class="card-body">
					<?php
						if(isset($_POST['TenDM']))
						{
							$TenDM = addslashes($_POST['TenDM']);

							if(trim($TenDM) == "")
								ThongBaoLoi("Tên danh muc không được bỏ trống!");
							else
							{
								$sql = "INSERT INTO danhmuc(TenDM) VALUES('$TenDM')";
								$kq = mysqli_query($link, $sql);
								if($kq)
									header("Location: danhmuc.php");
								elseif(mysqli_errno($link) == 1062)
									ThongBaoLoi("Chủ đề <strong>$TenDM</strong> đã tồn tại!");
								else
									ThongBaoLoi(mysqli_error($link));
							}
						}
					?>
					<form method="post" action="danhmuc_them.php">
						<div class="form-group">
							<label for="TenDM">Tên danh muc</label>
							<input type="text" class="form-control" id="TenDM" name="TenDM" placeholder="" required />
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
	</body>
</html>
