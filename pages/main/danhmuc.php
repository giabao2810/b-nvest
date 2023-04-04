<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<section class="cartegory">
    <div class="container">
            <div class="container">
                <div class="cartegory-top row2">
                    <p>Trang chủ</p> <span>⟶</span> <p>Sản phẩm</p> <span>⟶</span> <p><?php echo $row_title['tendanhmuc'] ?></p>
                </div>
            </div>

            <div class="row2">

                <!-- ----------DANH MỤC SẢN PHẨM Ở BÊN TRÁI---------- -->
                    <?php
                        // include("../sidebar/sidebar.php"); 
                        // include '../sidebar/sidebar.php';
                    ?>
                    
                    <div class="cartegory-left">
                        <ul>
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                            while($row = mysqli_fetch_array($query_danhmuc)){                        
                        ?>

                            <li class="cartegory-left-li"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
                            </li>

                            <!-- <li class="cartegory-left-li"><a href="#">ÁO ÂU NAM</a>
                                <ul>
                                    <li><a href="">ÁO SƠ MI</a></li>
                                    <li><a href="">ÁO GHI LÊ</a></li>
                                    <li><a href="">ÁO PHÔNG</a></li>
                                </ul>
                            </li>

                            <li class="cartegory-left-li"><a href="#">QUẦN ÂU NAM</a>
                                <ul>
                                    <li><a href="">QUẦN TÂY</a></li>
                                    <li><a href="">QUẦN TÂY CO DÃN</a></li>
                                </ul>
                            </li>

                            <li class="cartegory-left-li"><a href="#">PHỤ KIỆN NAM</a>
                                <ul>
                                    <li><a href="">ĐỒNG HỒ NAM</a></li>
                                    <li><a href="">CÀ VẠT NAM</a></li>
                                    <li><a href="">THẮT LƯNG NAM</a></li>
                                </ul>
                            </li> -->
                            <?php
                                } 
                            ?>
                        </ul>
                    </div>

                    <!-- ----------DANH MỤC SẢN PHẨM Ở BÊN PHẢI---------- -->		
                        
                    <div class="cartegory-right row2">

                        <div class="cartegory-right-top-item">
                            <h4 style="font-weight: normal";>Danh mục: <?php echo $row_title['tendanhmuc'] ?></h4>
                        </div>

                        <div class="cartegory-right-top-item">
                            <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                        </div>

                        <div class="cartegory-right-top-item">
                            <select name="" id="">
                                <option value="">Sắp xếp</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div>
                
                    
                        <!-- ----------SHOW RA SẢN PHẨM Ở BÊN PHẢI---------- -->
                        <div class="cartegory-right-content row2">
                            <?php
                                while($row_pro = mysqli_fetch_array($query_pro)){ 
                            ?>

                                <div class="cartegory-right-content-item">
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                                    </a>

                                    <a href="product.html">
                                        <h1 class="title_product"> <?php echo $row_pro['tensanpham'] ?> </h1>
                                    </a>
                                    
                                    <p> <?php echo number_format($row_pro['giasp'],0,',','.').'đ' ?> </p>           
                                </div>

                            <?php
                                } 
                            ?>
                        </div>
                    
                            
                        <div class="cartegory-right-bottom row2">
                            <div class="cartegory-right-bottom-items">
                                        <!-- <p>Hiện thị 2 <span>|</span> 4 sản phẩm</p> -->
                            </div>

                            <div class="cartegory-right-bottom-items">
                                        <?php
                                        $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
                                        $row_count = mysqli_num_rows($sql_trang);  
                                        $trang = ceil($row_count/3);
                                        ?>

                                        <?php
                                            if(isset($_GET['trang'])){
                                                $page = $_GET['trang'];
                                            }else{
                                                $page = 1;
                                            }
                                            if($page == '' || $page == 1){
                                                $begin = 0;
                                            }else{
                                                $begin = ($page*3)-3;
                                            }
                                            $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,3";
                                            $query_pro = mysqli_query($mysqli,$sql_pro);
                                            
                                        ?>
                                        <p>Trang hiện tại: <?php echo $page ?>/<?php echo $trang ?> </p>
                                        
                                        <p>
                                            <?php
                                            for($i=1;$i<=$trang;$i++){ 
                                            ?>
                                            <span>«</span><?php if($i==$page){echo '';}else{ echo ''; } ?><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a><span>»</span>
                                            <!-- Trang cuối -->
                                            <?php
                                            } 
                                            ?>
                                        </p>
                            </div>
                        </div>
                    </div> 
            </div>
</div>
</section>