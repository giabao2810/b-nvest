    <!-- -------------------------------------Footer----------------------------------------- -->
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
                <p>Bản quyền phần mềm thuộc về Hứa Chí Cường, Phạm Quang Long, Ngô Trường Phúc</p>
                <br>
                <p>Mọi chi tiết xin hệ qua Vestman@gmail.com</p>
                <br>
                <p>Hoặc SDT: 0909999999</p>
            </div>

            <div class="footer-bottom">
                <p> ©Vestman 2021 | All rights reserved </p>
            </div>
            
        </div>
    </section>

    <!-- -------------------------------------JavaScript----------------------------------------- -->
    <script src="JAVASCRIPT/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    
    <script> 
        $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
        });

        /* ---------- Các chức năng của Framework Slider ----------*/
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout: 3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    
</body>
</html>                     