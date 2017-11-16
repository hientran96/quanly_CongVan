<?php
	require_once "config.php";
	include_once "functions.php";
			$ID = $_GET['ID'];
	$sql = "SELECT d.TenDM ,t.*,n.HoVaTen
			FROM danhmuc d , tintuc t , nguoidung n
			WHERE d.ID = t.ID_danhmuc AND n.ID=t.ID_nguoidung AND t.ID=$ID";
			$danhsach = mysqli_query($link, $sql);
	$dong = mysqli_fetch_array($danhsach);
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
				<h4 class="card-header"><?php echo $dong['Tieude']?></h4>
				<div class="card-body">
					<?php
						
				
									echo "<p class='post-meta text-muted'>Đăng bởi {$dong['HoVaTen']} vào lúc {$dong['NgayDang']}.</p>";
									echo "<p class='text-justify font-weight-bold'>{$dong['TomTat']}</p>";
									echo "<p class='text-justify'>{$dong['NoiDung']}</p>";
								
						
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