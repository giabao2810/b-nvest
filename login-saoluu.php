<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<style type="text/css">
		body{
			background-image: url(https://i.pinimg.com/originals/16/a5/f1/16a5f1c9b25de7aad82d7a5210f80c30.jpg); 
			
		} 
		.wrapper-login {
		    width: 30%;
		    margin:  auto;
		}
		table.table-login {
			color: black;
		    width: 100%; 
		}
		table.table-login tr td  {
		    padding: 20px; 
		} 
		h1{ 
			color:black; 
			list-style: bold;  
			
		} 
		.wrapper-login{
			display: flex;  
			justify-content: center;
			padding: 8%;
		} 
		input{ 
			font-size:20px; 
			font-weight: bold;	
		} 
	</style>
</head>
<body>
<div class="wrapper-login"> 
	<form action="" autocomplete="off" method="POST">
		<table border="0.1" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2">
					<h1>LOGIN ADMIN</h1>
				</td>
			</tr>
			<tr>
				<th>ID ADMIN</th>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>PASSWORD</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>	
				<td colspan="2"><input type="submit" name="dangnhap" value="LOGIN"></td>
			</tr>
	</table>
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
