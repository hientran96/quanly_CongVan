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
				<h4 class="card-header">Quản lý tin tức</h4>
				<div class="card-body">
					<p><a class="btn btn-primary" href="tintuc_them.php" role="button">Đăng tin</a></p>
					
					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<tr>
								<th width="2%">#</th>
								<th width="7%">HÌnh ảnh</th>
								<th width="10%">Tên danh mục</th>
								<th width="10%">Tiêu đề</th>
								<th width="20%">Tóm tắt</th>
						
								<th width="10%">Người đăng</th>
								<th width="10%">Ngày đăng</th>
								
								<th width="3%">Sửa</th>
								<th width="3%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($dong = mysqli_fetch_array($danhsach))
								{
									echo "<tr>";
											echo "<th>{$dong['ID']}</th>";
											echo "<th>{$dong['Hinhanh']}</th>";
											echo "<td>{$dong['TenDM']}</td>";
											echo "<td>{$dong['Tieude']}</td>";
											echo "<td>{$dong['Tomtat']}</td>";

											echo "<td>{$dong['HoVaTen']}</td>";
											echo "<td>{$dong['Ngaydang']}</td>";
											
											
											echo "<td class='text-center'><a href='tintuc_sua.php?id={$dong['ID']}'><img src='img/edit.png' /></a></td>";
											echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa tin {$dong['Tieude']} không?\");' href='tintuc_xoa.php?id={$dong['ID']}'><img src='img/delete.png' /></a></td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
		
		
	</div>
	<?php include_once "footer.php"; ?>
	
</body>
</html>