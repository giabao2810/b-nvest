
<?php
	$sql_lietke_kh = "SELECT * FROM tbl_dangky ORDER BY id_dangky DESC";
	$query_lietke_kh = mysqli_query($mysqli,$sql_lietke_kh);
?>
<h2>Liệt Kê Khách Hàng</h2>
<br>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>ID</th>
    <th>Tên Khách</th>
    <th>Email</th>
    <th>Địa Chỉ</th>
    <th>Mật Khẩu</th>
    <th>Điện Thoại</th>
  	<th>Quản Lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_kh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['matkhau'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
	     
    </td>
   	<td>
   		<a href="modules/quanlykhach/xuly.php?iddangky=<?php echo $row['id_dangky'] ?>">Xoá</a> | <a href="?action=quanlykhach&query=sua&iddangky=<?php echo $row['id_dangky'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>