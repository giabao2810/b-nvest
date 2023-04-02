<p>Welcome to Sửa</p>
<?php
	$sql_sua_kh = "SELECT * FROM tbl_dangky WHERE id_dangky='$_GET[iddangky]' LIMIT 1";
	$query_sua_kh = mysqli_query($mysqli,$sql_sua_kh);
?>
<h2>Sửa Thông Tin Khách</h2>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_kh)) {
?>
 <form method="POST" action="modules/quanlykhach/xuly.php?iddangky=<?php echo $row['id_dangky'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên Khách Hàng</td>
	  	<td><input type="text" value="<?php echo $row['tenkhachhang'] ?>" size="50" name="tenkhachhang"></td>
	  </tr>
	   <tr>
	  	<td>Email</td>
	  	<td><input type="text" value="<?php echo $row['email'] ?>" size="50" name="email"></td>
	  </tr>
	  <tr>
	  	<td>Địa Chỉ</td>
	  	<td><input type="text" value="<?php echo $row['diachi'] ?>" size="50" name="diachi"></td>
	  </tr>
	  <tr>
	  	<td>Mật Khẩu</td>
	  	<td><input type="text" value="<?php echo $row['matkhau'] ?>" size="50" name="matkhau"></td>
	  </tr>
	  <tr>
	  	<td>Điện Thoại</td>
	  	<td><input type="text" value="<?php echo $row['dienthoai'] ?>" name="dienthoai"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suakhach" value="Sửa Thông Tin"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>