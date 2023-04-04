<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php");
			echo '<br>';	
			echo '<br>';	
			echo '<br>';	
			echo '<h5 style="color: green; text-align: right;">Đăng nhập thành công</h5>';
			header("Location:index.php?quanly=giohang");
			
		}else{
			echo '<br>';	
			echo '<br>';	
			echo '<br>';		
			echo '<h5 style="color: red; text-align: right;">Tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại!</h5>';
						
		}
	} 
?>

<form action="" autocomplete="off" method="POST">
<section class="cartegory">
    <div class="container">
		<div class="row2">

		<!-- ----------DANH MỤC SẢN PHẨM Ở BÊN TRÁI---------- -->
		<div class="login-left">
			<ul>

				<li class="login-left-li">TÀI KHOẢN VESTMAN
					<ul>
					<li><a href="index.php?quanly=dangnhap">ĐĂNG NHẬP</a></li>
										<li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li>
										<li><a href="#">QUÊN MẬT KHẨU</a></li>
										<li><a href="index.php?quanly=thaydoimatkhau">ĐỔI MẬT KHẨU</a></li>
					</ul>
				</li>

			</ul>
		</div>

		<div class="login-right row2">
			<div class="login-right-top-text">
				<p>ĐĂNG NHẬP</p>
			</div>

			<div class="login-right-customer">
				<div class="login-right-customer-bottom">

					<div class="input-login">
						<p> Tài khoản</p>
						<input type="text" placeholder="Nhập tài khoản của bạn" size="50" name="email">
						<!-- <i class="fas fa-arrow-left"></i> -->
					</div>
					
					<div class="input-login">
						<p>Mật khẩu </p>
						<input type="password" placeholder="Nhập mật khẩu của bạn" size="50" name="password">
						<i class="fas fa-eye"></i>
					</div>

					<div class="submit-login-button">
						<a type="submit" name="dangnhap" value="Đăng nhập"><button type="submit" name="dangnhap" value="Đăng nhập"> <i class="fas fa-sign-in-alt"></i>
						<p>Đăng nhập</p> </button></a>
					</div>

					<h2>HOẶC ĐĂNG NHẬP BẰNG: </h2>
					<div class="submit-login-button google">
						<a href="#"><button> <i class="fab fa-google"></i> <p>GOOGLE</p> </button></a>
						<!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
					</div>

					<div class="submit-login-button facebook">
						<a href="#"><button> <i class="fab fa-facebook"></i> <p>FACEBOOK</p> </button></a>
						<!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
					</div>

				</div>
			</div>

			<!-- <div class="login-right-bot-text">
				<h3>" VESTMAN CHUẨN NÉT TINH TẾ, CHUẨN ĐÀN ÔNG "</h3>
			</div> -->
		</div>

		</div>
	</div>
</section>
</form>