<?php include "header.php"?>
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>ĐÂY LÀ KIM WATCH</h4>
                            <span>Nơi cung cấp những chiếc đồng hồ chất lượng &amp; sang trọng cho bạn</span>
                            <div class="main-border-button">
                                <a href="#">Xem Ngay!</a>
                            </div>
                        </div>
                        <img src="assets/images/left-banner-image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Nữ</h4>
                                        <span>Các loại đồng hồ cho nữ</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Nữ</h4>
                                            <p>Đồng hồ không chỉ để xem thời gian mà nó còn là trang sức.</p>
                                            <div class="main-border-button">
                                                <a href="#">Xem Thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/nu.png" height="285px">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Nam</h4>
                                        <span>Các loại đồng hồ cho nam</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Nam</h4>
                                            <p>Đồng hồ giúp toát lên sự thanh lịch và sang trọng cho phái mạnh.</p>
                                            <div class="main-border-button">
                                                <a href="#">Xem Thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/nam3.jpg" height="285px">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Thể thao</h4>
                                        <span>Các loại đồng hồ phù hợp với hoạt động thể chất</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Thể thao</h4>
                                            <p>Hỗ trợ người dùng đo quảng đường chạy, đo nhịp tim...</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/thethao.png" height="285px">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Cao Cấp</h4>
                                        <span>Các dòng đồng hồ cao cấp chất lượng cực tốt</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Cao cấp</h4>
                                            <p>Đồng hồ cao cấp tuy giá thành cao nhưng đổi lại sẽ có chất lượng tương xứng với giá tiền.</p>
                                            <div class="main-border-button">
                                                <a href="#">Xem Thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/luxury2.jpg" height="285px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Mới nhất cho nam</h2>
                    <span>Các sản phẩm được ra mắt mới nhất, chọn xem thêm để biết thêm chi tiết.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <?php                
                            $db = new products();
                            foreach ($db->getList() as $row){
                        ?>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="?page=detail&product_id=<?=$row['product_id']?>&category_id=<?=$row['category_id']?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/<?=$row['img']?>" alt="">
                            </div>
                            <div class="down-content">
                                <h4><?=$row['name']?></h4>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span style="color: red;"><?=number_format($row['sale_price'], 0, ",", ".")?>₫</span>
                                <span style="color: grey; text-decoration: line-through; font-weight: 100; font-size: 15px; width:100px;float: left;"><?=number_format($row['price'], 0, ",", ".")?>₫</span>
                                <?php
                                    //Tính phần trăm giá giảm
                                    $percent_price_reduction = round(($row['sale_price'] / $row['price']) * 100, 0);
                                    $percent_discount = 100 - $percent_price_reduction;
                                ?>
                                <span class="percent_discount" style=" font-size: 12px; color: #ef5555; width: 30px;font-weight: 100;float: left;" ><?= $percent_discount?>%</span>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Mới nhất cho nữ</h2>
                    <span>Các sản phẩm được ra mắt mới nhất, chọn xem thêm để biết thêm chi tiết.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/donghonu1.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Casio 22mm Nữ LTP-1274D-7ADF</h4>
                                <span style="color:red;">1.000.000₫</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/donghonu2.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Orient 31mm Nữ FNR1Q001W0 </h4>
                                <span style="color:red;">4.420.000₫</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/donghonu3.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ SRWatch 30mm Nữ SL1605.1102TE</h4>
                                <span style="color:red;">1.320.000₫</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/donghonu4.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Tissot 35mm Nữ T050.207.37.017.05</h4>
                                <span style="color:red;">10.600.000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->


<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Khám phá sản phẩm của chúng tôi</h2>
                    <span>Những chiếc đồng hồ ngày nay không chỉ để xem giờ, mà nó còn là món trang sức đẹp đẽ và là biểu trưng rõ nhất cho phong cách, giá trị, địa vị của người đeo. Tuy nhiên, có một số đất nước ghét đồng hồ và kiêng tặng món quà này cho bạn bè, người thân...</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>Phần lớn mọi người đều dùng điện thoại để xem giờ, nhưng đồng hồ vẫn luôn mang vẻ đẹp và sức hấp dẫn riêng của nó.</p>
                    </div>
                    <p>Không chỉ dùng để đo thời gian, đồng hồ đeo tay là phụ kiện mang tính biểu tượng của sự lịch lãm, phong cách, nam tính cho nam giới trong nhiều thập kỷ qua.</p>
                    <p>Giới doanh nhân và nghệ sỹ, đặc biệt là đàn ông, họ coi nó như một món vật dụng thể hiện đẳng cấp ngay cả khi xuất hiện trước công chúng cũng như trên phim ảnh, sự kiện.</p>
                    <div class="main-border-button">
                        <a href="?page=product">Xem Thêm!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Đồng hồ Casio</h4>
                                <span>Sản phẩm mới nhất</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="assets/images/dongho1.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="assets/images/dongho4.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Đồng Hồ Nam</h4>
                                <span>Hơn 15 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Social Area Starts ***** -->
<!-- <section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Social Media</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Fashion</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-01.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Brand</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-03.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Makeup</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-04.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Leather</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-05.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Bag</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="assets/images/instagram-06.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Social Area Ends ***** -->

<?php include "footer.php"; ?>