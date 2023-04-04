<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<h5 style="color:green; text-align: center;">Bạn đã đăng ký thành công!</h5>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>

<form action="" method="POST">
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
						
						<form action="" autocomplete="off" method="POST">
						<div class="login-right row2">
							<div class="login-right-top-text">
								<p>ĐĂNG KÝ</p>
							</div>

							<table class="dangky">
								<div class="login-right-customer">
									<div class="login-right-customer-bottom">

										<div class="input-login">
											<p> Họ tên</p>
											<input type="text" placeholder="Nhập họ tên của bạn" size="50" name="hovaten">
											<!-- <i class="fas fa-arrow-left"></i> -->
										</div>

										<div class="input-login">
											<p> Email</p>
											<input type="text" placeholder="Nhập email của bạn" size="50" name="email">
											<!-- <i class="fas fa-arrow-left"></i> -->
										</div>

										<div class="input-login">
											<p> SĐT</p>
											<input type="text" placeholder="Nhập số điện thoại của bạn" size="50" name="dienthoai">
											<!-- <i class="fas fa-arrow-left"></i> -->
										</div>
										
										<div class="input-login">
											<p>Mật khẩu </p>
											<input type="password" placeholder="Nhập mật khẩu của bạn" name="matkhau">
											<i class="fas fa-eye"> </i>
										</div>


										<div class="submit-login-button">
											<a type="submit" name="dangky" value="Đăng ký"> 
												<button type="submit" name="dangky" value="Đăng ký"> 
													<?php
														header('Location:../../index.php');
													?>
													<i class="fas fa-sign-in-alt"></i> <p>ĐĂNG KÝ</p> 
												</button>
											</a>
											
											<!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
											<a href="index.php?quanly=dangnhap"><br><h4 style="color: red";>Đăng nhập nếu có tài khoản</h4></a>
										</div>
									
									</div>
								</div>
							</table>

							<!-- <div class="login-right-bot-text">
								<h3>" VESTMAN CHUẨN NÉT TINH TẾ, CHUẨN ĐÀN ÔNG "</h3>
							</div> -->
						</div>
						</form>

					</div>
		</div>
	</section>
</form>