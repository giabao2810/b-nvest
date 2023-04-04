<?php
  if(isset($_SESSION['dangky'])){
    // echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'Xin chào: '.'<span style="color:green";>'.$_SESSION['dangky'].'</span>';
  } 
  ?>
</p>

<?php
	if(isset($_SESSION['cart'])){
	}
?>
<section class="cartegory">
    <div class="container">
      <div class="cart-content row2">
                      <div class="cart-content-left">
                        <table>

                            <tr>
                                <th>STT</th>
                                <th>Sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>

                            <?php
                              if(isset($_SESSION['cart'])){
                                $i = 0;
                                $tongtien = 0;
                                foreach($_SESSION['cart'] as $cart_item){
                                  $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                  $tongtien+=$thanhtien;
                                  $i++;
                            ?>

                          <tr>
                          <td> <p> <?php echo $i; ?> </p> </td>
                          <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="125px" height="175px"></td>
                                <td> <p> <?php echo $cart_item['tensanpham']; ?> </p> </td>
                                <td> <p> <?php echo $cart_item['masp']; ?> </p> </td>
                                <td>
                                  <p>
                                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                                    <?php echo $cart_item['soluong']; ?>
                                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
                                  </p> 
                                </td>
                                <td> <p> <?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?> </p> </td>
                                <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">X</a></td>
                                <!-- <td><p>L</p></td>
                                <td><input type="number" value="1" min="1"></td>
                                <td><p>2.500.000<sup>đ</sup></p></td>
                                <td><span>x</span></td> -->
                          <?php
                            }
                          ?>

                          <tr>
                            <td colspan="8">
                              <p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
                            </td>

                          
                          </tr>

                          <?php	
                          }else{ 
                          ?>
                          <tr>
                            <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
                          
                          </tr>
                          <?php
                          } 
                          ?>
      </table>
                      </div>

                      <!-- ----------Tổng số tiền của sản phẩm---------- -->
                      <div class="cart-content-right">
                          <table>
                              <tr>
                                  <th colspan="2">TỔNG TIỀN GIỎ HÀNG:</th>
                              </tr>

                              <tr>
                                  <td>TỔNG TIỀN HÀNG:</td>
                                  <td><p><?php echo number_format($tongtien,0,',','.').'vnđ' ?></p></td>
                              </tr>

                              <tr>
                                  <td>TẠM TÍNH (Gồm thuế VAT 10%):</td>
                                  <td><p style="color: black; font-weight: bold;"><?php echo number_format($tongtien,0,',','.').'vnđ' ?> +10%</p></td>
                              </tr>

                              
                          </table>

                          <div class="cart-content-right-text">
                              <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 5.550.000 đ</p>
                              <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 18px;">"xxx"</span> để được miễn phí ship</p>
                          </div>

                          <div class="cart-content-right-button">
                              <button> 
                                <?php
                                if(isset($_SESSION['dangky'])){
                                  ?>
                                  <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
                                <?php
                              
                                }else{
                                ?>
                                  <p><a href="index.php?quanly=dangky">Đăng ký để đặt hàng</a></p>
                                <?php
                                }
                                ?>
                              </button>
                          </div>

                          <div class="cart-content-right-dangnhap">
                              <p>TÀI KHOẢN VESTMAN</p>
                              <br>
                              <p>Hãy <a style="color: red"; href="index.php?quanly=dangky">Đăng nhập</a> tài khoản của bạn để thêm các quyền lợi.</p>
                            
                          </div>
                    </div>
                  </div>
              </div>
    </div>
  </section>