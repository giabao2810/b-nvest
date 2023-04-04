<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<section class="cartegory">
    <div class="container">
            <div class="product-top row2">
                <p>Trang chủ</p> <span>⟶</span> <p>SẢN PHẨM</p> <span>⟶</span> <p><?php echo $row_chitiet['tendanhmuc'] ?></p> <span>⟶</span> <p><?php echo $row_chitiet['tensanpham'] ?></p> 
            </div>

            <div class="product-content row2">
                <div class="product-content-left row2">
                    <div class="product-content-left-big-img">
                        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                    </div>

                    <div class="product-content-left-small-img">
                        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                        <img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                    </div>
                </div>

                            <!-- ----------Các hình và nội dung của sản phẩm---------- -->
                            
                                <div class="product-content-right">
                                    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                                    
                                        <div class="product-content-right-product-name">
                                            <h1><?php echo $row_chitiet['tensanpham'] ?></h1>
                                            <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
                                        </div>

                                        <div class="product-content-right-product-price">
                                            <p><?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
                                        </div>

                                        <div class="product-content-right-product-color">
                                            <p> <span style="font-weight: bold;">Màu sắc</span> :Xanh navy<span style="color: red;">*</span></p>
                                            <div class="product-content-right-product-color-img">
                                                <img src="IMAGES/Product/Productmore/Minicolor/productmore1.webp" alt="">
                                            </div>
                                        </div>

                                        <div class="product-content-right-product-size">
                                            <p style="font-weight: bold; font-size: 14px !important;">Size:</p>
                                            <div class="size">
                                                <span>S</span>
                                                <span>M</span>
                                                <span>L</span>
                                                <span>XL</span>
                                                <span>XXL</span>
                                            </div>
                                        </div>

                                        <div class="quantity">
                                            <p style="font-weight: bold;">Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
                                            <!-- <input type="number" min="0" value="1">  -->
                                        </div>

                                        <!-- <p style="color: red; font-size: 14px;";>Vui lòng chọn size!</p> -->
                                        <!-- <div class="product-content-right-product-button">
                                            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
                                        </div> -->

                                        <div class="product-content-right-product-button">
                                            <a name="themgiohang" type="submit"><button name="themgiohang" type="submit"> <i class="fas fa-shopping-cart"></i> <p>LƯU VÀO GIỎ HÀNG</p> </button></a>
                                        <!-- <a href=""><button><p>TÌM TẠI CỬA HÀNG</p></button></a> -->
                                        </div>
                                    </form>

                                    <div class="product-content-right-product-icon">
                                        <div class="product-content-right-product-icon-item">
                                            <i class="fas fa-phone-alt"></i> <a href=""><p>Hotline</p></a>
                                        </div>

                                        <div class="product-content-right-product-icon-item">
                                            <i class="far fa-comments"></i> <a href=""><p>Chat</p></a>
                                        </div>

                                        <div class="product-content-right-product-icon-item">
                                            <i class="far fa-envelope"></i> <a href=""><p>Mail</p></a>
                                        </div>
                                    </div>

                                    <div class="product-content-right-product-QR">
                                        <img src="IMAGES/" alt="">
                                    </div>
                                    
                                    <!-- ----------Mở rộng nội dung sản phẩm---------- -->
                                    <div class="product-content-right-bottom">
                                        <div class="product-content-right-bottom-top">
                                            ∨
                                        </div>  

                                        <div class="product-content-right-bottom-content-big">
                                            <div class="product-content-right-bottom-content-title row2">
                                                <div class="product-content-right-bottom-content-title-item chitiet">
                                                        <p>Chi tiết</p>
                                                </div>

                                                <div class="product-content-right-bottom-content-title-item baoquan">
                                                        <p>Bảo quản</p>
                                                </div>

                                                <div class="product-content-right-bottom-content-title-item">
                                                    <p>Tham khảo size</p>
                                                </div>
                                            </div>

                                            <div class="product-content-right-bottom-content">
                                                <div class="product-content-right-bottom-content-chitiet">
                                                Vestman cung cấp cho các quý ông những trang phục gọn gàng, tinh tế, luôn có một sự thanh lịch đặc biệt với phái nữ. Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, sắc nét. Áo vest phù hợp với các doanh nhân.
                                                    Lưu ý: Giá sản phẩm chỉ bao gồm áo Vest chưa bao gồm quần âu.
                                                </div>

                                                <div class="product-content-right-bottom-content-baoquan">
                                                    Chi tiết bảo quản sản phẩm : 

                                                    * Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn. <br><br>

                                                    * Vải voan , lụa , chiffon nên giặt bằng tay.<br><br>

                                                    * Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br><br>

                                                    * Vải thô , tuytsy, kaki có phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.<br><br>

                                                    * Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.Nếu giặt thì nên lộn trái sản phẩm khi giặt , đóng khuy , kéo khóa, không nên giặt chung cùng đồ sáng màu , tránh dính màu vào các sản phẩm khác. <br><br>

                                                    * Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu , phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh , nên giặt cùng xà phòng pha loãng.<br><br>

                                                    * Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ , vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>                
                                </div>
                </section>
                
                <!-- ----------Sản phẩm liên quan bên dưới---------- -->
                <section class="product-related container">
                    <div class="product-related-title">
                        <p>SẢN PHẨM LIÊN QUAN</p>
                    </div>

                    <div class=" row2 product-content">
                        <div class="product-related-item">
                            <a href=""><img src="IMAGES/Product/Prodcutlienquan/Productlienquan1.jpeg" alt=""></a>
                            <a href=""><h1>VEST DOANH NHÂN MẪU 2</h1></a>
                            <p>2.500.000<sup>đ</sup></p>
                        </div>

                        <div class="product-related-item">
                            <a href=""><img src="IMAGES/Product/Prodcutlienquan/Productlienquan2.jpeg" alt=""></a>
                            <a href=""><h1>VEST DOANH NHÂN MẪU 3</h1></a>
                            <p>2.500.000<sup>đ</sup></p>
                        </div>

                        <div class="product-related-item">
                            <a href=""><img src="IMAGES/Product/Prodcutlienquan/Productlienquan3.jpeg" alt=""></a>
                            <a href=""><h1>VEST DOANH NHÂN MẪU 4</h1></a>
                            <p>2.500.000<sup>đ</sup></p>
                        </div>

                        <div class="product-related-item">
                            <a href=""><img src="IMAGES/Product/Prodcutlienquan/Productlienquan4.jpeg" alt=""></a>
                            <a href=""><h1>VEST DOANH NHÂN MẪU 5</h1></a>
                            <p>2.500.000<sup>đ</sup></p>
                        </div>

                        <div class="product-related-item">
                            <a href=""><img src="IMAGES/Product/Prodcutlienquan/Productlienquan5.jpeg" alt=""></a>
                            <a href=""><h1>VEST DOANH NHÂN MẪU 6</h1></a>
                            <p>2.500.000<sup>đ</sup></p>
                        </div>
                    </div>
                </section>     
            </div>
    </div>
    </section>
<?php
} 
?>
