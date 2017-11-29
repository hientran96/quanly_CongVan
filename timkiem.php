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
						
					if (isset ($ _ POST [ ‘timkiem’])) {
					$ key = addslashes ($ _ POST [ ‘khóa_tìm_kiếm’]);
					$ sql = "SELECT * FROM tintuc WHERE (LOWER (tiêu đề) LIKE ‘% $ key%’ OR LOWER (noidung) LIKE ‘% $ key%’)";
					$ KQ = mysql_query ($ sql);
					if (mysql_num_rows ($ KQ) <> 0) {
					?>
					<div class = "bảng khối">
					<style h2 = “text-transform: chữ hoa”> <a href=””> Kết quả tìm kiếm </a> </ h2>

					thẻ <div class = “content”>
					<? php
					while ($ row = mysql_fetch_object ($ KQ)) {
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
		<?php include_once "footer.php"; ?>
		
	</body>
</html>