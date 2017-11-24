<?php
	require_once "config.php";
	include_once "functions.php";
			//$id = $_GET['id'];


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
         <div class="card" >
        <h4 class="card-header">Tin tức và sự kiện</h4>
       
          <div class="card-body">
          <?php
            $id = $_GET['id'];
              
              $sql = "SELECT * FROM tintuc WHERE ID = $id";
              $danhsach = mysqli_query($link, $sql);
              
              // Vì chỉ trả về 1 dòng nên không cần vòng lặp while
              $dong = mysqli_fetch_array($danhsach);
            
            
          
                 echo " <h5 class='mt-0'>{$dong['Tieude']}</h5>";
                  echo "{$dong['Noidung']}";  
          ?>
        
        </div>
      </div>
		</div>
		<?php include_once "footer.php"; ?>
	
	
	</body>
</html>