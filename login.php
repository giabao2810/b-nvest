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
	<title>Vestman | Đăng nhập quản trị</title>
	<link rel="stylesheet" href="css/styleadmincp2.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
</head>

<body>
	<form action="" autocomplete="off" method="POST">	
		<div class="login-right-1 row2">
                    <div class="login-right-top-text">
                        <p>ĐĂNG NHẬP TRANG ADMIN VESTMAN</p>
                    </div>

                    <div class="login-right-customer">
                        <div class="login-right-customer-bottom">

                            <div class="input-login">
                                <p> Tài khoản</p>
                                <input type="text" placeholder="Nhập tài khoản của bạn" name="username">
                                <!-- <i class="fas fa-arrow-left"></i> -->
                            </div>
                            
                            <div class="input-login">
                                <p>Mật khẩu </p>
                                <input type="password" placeholder="Nhập mật khẩu của bạn" name="password">
                                <i class="fas fa-eye"></i>
                            </div>

                            <div class="submit-login-button">
                                <a type="submit" name="dangnhap" value="LOGIN"><button type="submit" name="dangnhap" value="LOGIN"> <i class="fas fa-sign-in-alt"></i> <p>ĐĂNG NHẬP</p> </button></a>
                                <!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
                            </div>
						</div>
					</div>
		</div>
	</form>
	<br>
	
	<section class="footer">
        <div class="footer-container">

            <p>Tải ứng dụng Vestman</p>
            <div class="app-google">
                <a href=""><img src="https://images.squarespace-cdn.com/content/v1/5a690fc0f14aa1f072f11455/1517093609638-D1BWSMYB6GORY4INPSAA/available_on_the_app_store_badge.jpg" alt=""></a>
                <a href=""><img src="https://www.google.com/intl/en/cast/about/static/images/download-badges/android-download.png" alt=""></a>
            </div>

            <p>Nhận bản tin Vestman</p>
            <div class="input-email">
                <input type="text" placeholder="Nhập email của bạn">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="footer-items">
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Bảng tin</a></li>
                <!-- <li><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-youtube"></i></a></li> -->
            </div>

            <div class="footer-text">
                <p>Bản quyền phần mềm thuộc về A2 TEAM</p>
                <br>
                <p>Mọi chi tiết xin hệ qua Vestman@gmail.com</p>
                <br>
                <p>Hoặc SDT: 0787862770</p>
            </div>

            <div class="footer-bottom">
                <p> ©Vestman 2021 | All rights reserved </p>
            </div>
            
        </div>
    </section>
</body>

</html>
