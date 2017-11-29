<?php
	require_once "config.php";
	include_once "functions.php";
	$sql = "SELECT d.TenDM ,t.*,n.HoVaTen
			FROM danhmuc d , tintuc t , nguoidung n
			WHERE d.ID = t.ID_danhmuc AND n.ID=t.ID_nguoidung";
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
				<h4 class="card-header">tim kiem</h4>
				<div class="card-body">
					<?php	
					if (isset ($_POST[ 'TenDM'])) {
					$ID = addslashes ($_POST [ 'khóa_tìm_kiếm']);
					$sql = "SELECT * FROM tintuc WHERE (LOWER (tiêu đề) LIKE '% $ID%'OR LOWER (Noidung) LIKE '% $ID%')";
					$danhsach = mysqli_query($link, $sql);
							
					$dong = mysqli_fetch_array($danhsach);
					if (mysql_num_rows ($kq)<>0) {
					?>
					<div class = "bảng khối">
					<h2 style  = " text-transform: chữ hoa ;"> <a href=""> Kết quả tìm kiếm </a> </h2>

					thẻ <div class = "content">
					<?php
					while ($dong= mysql_fetch_object ($danhsach)) {
					?>

					Nội dung cần hiển thị
					<?php
					}
					?>
					</div>
					</div>
					<?php
					}
					}
					?>
	</div>
</div>
</div>
		<?php include_once "footer.php"; ?>
		
	</body>
</html>