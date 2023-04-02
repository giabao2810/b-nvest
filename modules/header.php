<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>

<section class="top">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h3>Trang quản lý VESTMAN</h3>    
                </div>

                <div class="logout-text">
					<!-- <h5>Đăng xuất: </h5> -->
					<a href="index.php?dangxuat=1">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])){
					echo $_SESSION['dangnhap'];
					} ?></a>
				</div>
				
            </div>
        </div>
</section>