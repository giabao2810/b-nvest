<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<h5 style="color: green; text-align: right;">Thay đổi mật khẩu thành công!</h5>';
		}else{
			echo '<h5 style="color: red; text-align: right;">Tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại!</h5>';
		}
	} 
?>
<section class="cartegory">
    <div class="container">
			<form action="" method="POST">
			<div class="row2">

							<!-- ----------DANH MỤC SẢN PHẨM Ở BÊN TRÁI---------- -->
							<div class="login-left">
								<ul>

									<li class="login-left-li">TÀI KHOẢN VESTMAN
										<ul>
											<li><a href="#">QUÊN MẬT KHẨU</a></li>
											<li><a href="index.php?quanly=thaydoimatkhau">ĐỔI MẬT KHẨU</a></li>
										</ul>
									</li>

								</ul>
							</div>

							<div class="login-right row2">
								<div class="login-right-top-text">
								<p>ĐỔI MẬT KHẨU</p>
								</div>

								<table class="dangky">
									<div class="login-right-customer">
										<div class="login-right-customer-bottom">

											<div class="input-login">
												<p>Tài khoản</p>
												<input type="text" placeholder="Nhập tài khoản của bạn" name="email"">
												<!-- <i class="fas fa-arrow-left"></i> -->
											</div>

											<div class="input-login">
												<p>Mật khẩu cũ</p>
												<input type="text" placeholder="Nhập mật khẩu cũ của bạn" name="password_cu">
												<i class="fas fa-eye"> </i>
												<!-- <i class="fas fa-arrow-left"></i> -->
											</div>
											
											<div class="input-login">
												<p>Mật khẩu mới</p>
												<input type="password" placeholder="Nhập mật khẩu mới của bạn" name="password_moi">
												<i class="fas fa-eye"> </i>
											</div>


											<div class="submit-login-button">
												<a type="submit" name="doimatkhau" value="Đổi mật khẩu"><button type="submit" name="doimatkhau" value="Đổi mật khẩu"> <i class="fas fa-sign-in-alt"></i> <p>ĐỔI MẬT KHẨU</p> </button></a>
												<!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
												
											</div>
										
										</div>
									</div>
								</table>

								<!-- <div class="login-right-bot-text">
									<h3>" VESTMAN CHUẨN NÉT TINH TẾ, CHUẨN ĐÀN ÔNG "</h3>
								</div> -->
							</div>

						</div>
			</form>
	</div>
</section>