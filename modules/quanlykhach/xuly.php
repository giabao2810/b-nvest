<p>Welcome to xứ lí</p>
<?php
	include("../../config/config.php");

$tenkhach = $_POST['tenkhachhang'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$matkhau = $_POST['matkhau'];
$dienthoai = $_POST['dienthoai'];

if(isset($_POST['suakhach'])){
	//sua
	$sql_update = "UPDATE tbl_dangky SET tenkhachhang='".$tenkhach."',email='".$email."',diachi='".$diachi."',matkhau='".$matkhau."',dienthoai='".$dienthoai."' WHERE id_dangky='$_GET[iddangky]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlykhach&query=them');
}else{

	$id=$_GET['iddangky'];
	$sql_xoa = "DELETE FROM tbl_dangky WHERE id_dangky='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlykhach&query=them');
}

?>	