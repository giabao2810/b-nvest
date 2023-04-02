<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				//////////////////Quản Lý Danh Mục Sản Phẩm///////////////////
				if($tam=='quanlydanhmucsanpham' && $query=='them'){
					include("modules/quanlydanhmucsp/them.php");
					include("modules/quanlydanhmucsp/lietke.php");
				}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
					include("modules/quanlydanhmucsp/sua.php");
				}
				//////////////////Quản Lý Sản Phẩm///////////////////

				elseif ($tam=='quanlysp' && $query=='them') {
					include("modules/quanlysp/them.php");
					include("modules/quanlysp/lietke.php");
				}elseif($tam=='quanlysp' && $query=='sua'){
					include("modules/quanlysp/sua.php");
				}
				//////////////////Quản Lý Khách///////////////////
				elseif ($tam=='quanlykhach' && $query=='lietke') {
					include("modules/quanlykhach/lietke.php");
				}elseif($tam=='quanlykhach' && $query=='sua'){
					include("modules/quanlykhach/sua.php");
				}
				//////////////////Xem Đơn Hàng///////////////////
				elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/lietke.php");
				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");
				}
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>