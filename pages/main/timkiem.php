<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<br>
<br>
<br>
<h5 style="text-align: center;">Từ khoá tìm kiếm: <?php echo $_POST['tukhoa']; ?></h5>
<section class="cartegory">
    <div class="container">
		<div class="cartegory-right-content row2">
			<?php
				while($row = mysqli_fetch_array($query_pro)){ 
			?>
					<div class="cartegory-right-content-item">
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
						</a>

						<a href="product.html">
							<h1 class="title_product"><?php echo $row['tensanpham'] ?></h1>
						</a>
						
						<p> <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?> </p>
						<p> <?php echo $row['tendanhmuc'] ?> </p>
						
						
					</div>				
			<?php
				} 
			?>				
		</div>
		<br>
	</div>
</section>