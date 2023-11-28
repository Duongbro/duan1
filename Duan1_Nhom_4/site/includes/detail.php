<?php include "header.php"; ?>
<!-- ***** Product Area Starts ***** -->
<section class="section" id="product" style="margin-top:150px">
    <div class="container">
        <?php
        $db = new products();
        $product_id = $_GET['product_id'];
        $item = $db->getByID_Product($product_id);
        ?>
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <!-- <img src="assets/images/dongho1.webp"> -->
                    <div class="preview col-md-8" style="margin-left:100px">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active border" id="pic-1"><img src="../assets/images/<?= $item['img'] ?>" /></div>
                            <?php
                            $db = new products();
                            $product_id = $_GET['product_id'];
                            foreach ($db->getThumbnailByID_Product($product_id) as $thumbnail) {
                            ?>
                                <div class="tab-pane border" id="pic-<?= $thumbnail['thumbnail_id'] ?>"><img src="../assets/images/<?= $thumbnail['image'] ?>" /></div>

                            <?php
                            }
                            ?>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active border"><a data-target="#pic-1" data-toggle="tab"><img src="../assets/images/<?= $item['img'] ?>" /></a></li>
                            <?php
                            $db = new products();
                            $product_id = $_GET['product_id'];
                            foreach ($db->getThumbnailByID_Product($product_id) as $thumbnail) {
                            ?>
                                <li class="border"><a data-target="#pic-<?= $thumbnail['thumbnail_id'] ?>" data-toggle="tab"><img src="../assets/images/<?= $thumbnail['image'] ?>" /></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?= $item['name'] ?></h4>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <div class="price_detail">
                        <span class="price_sale_price" style="color:red;"><?= number_format($item['sale_price'], 0, ",", ".")?>₫</span>
                        <span class="price_detail_price" style="color:gray;  font-weight: 100; font-size: 15px; margin-top: 29px;"><?= number_format($item['price'], 0, ",", ".")?>₫</span>    
                    </div>
                    

                    <p style="color: black;"><?= $item['short_describe'] ?></p>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6 style="color: black;">Số Lượng</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="<?= $item['quantity']?>" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <div class="main-border-button" style="text-align:center;"><a href="" style="width:350px;">THÊM VÀO GIỎ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->
<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Các sản phẩm liên quan</h2>
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
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="?page=detail"><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/dongho1.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Casio 43.5mm Nam MTP-1374D-1AVDF</h4>
                                <span style="color:red;">1.740.000₫</span>
                                <!-- <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="?page=detail"><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/dongho2.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Olym Pianus 42mm Nam OP990-45ADGS-GL-X</h4>
                                <span style="color:red;">6.550.000₫</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="?page=detail"><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/dongho3.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Casio 42mm Nam MTP-1375L-1AVDF</h4>
                                <span style="color:red;">1.670.000₫</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="?page=detail"><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href="?page=cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/dongho4.webp" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Đồng Hồ Casio 41mm Nam MTP-1384L-7AVDF</h4>
                                <span style="color:red;">1.740.000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->
<section class="section" id="men" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Đánh giá sản phẩm</h2>
                    <span>Hãy để lại đánh giá của bạn dưới đây.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">
                                        <img class="rounded-circle shadow-1-strong me-3" src="assets/images/nam1.jpg" alt="avatar" width="50" height="50" />
                                        <div>
                                            <h6 class="fw-bold text-primary mb-1">Nguyễn Thái Dương</h6>
                                            <p class="text-muted small mb-0">11/19/2023</p>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-4 pb-2">Đồng hồ này đẹp quá</p>
                                    <div class="small d-flex justify-content-start">
                                        <a href="#!" class="d-flex align-items-center me-3">
                                            <i class="far fa-comment-dots me-2"></i>
                                            <p class="mb-0" style="color:blue;">Sửa</p>

                                            <p class="mb-0" style="margin-left: 10px; color:blue;">Xóa</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- Phàn Comment -->
                                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                    <div class="d-flex flex-start w-100">
                                        <img class="rounded-circle shadow-1-strong me-3" src="assets/images/nam1.jpg" alt="avatar" width="40" height="40" />
                                        <div class="form-outline w-100">
                                            <form style="Width:600px;">
                                                <input type="text" name="content" class="content" placeholder="Viết bình luận...">
                                                <input type="hidden" name="id_product">
                                                <div class="float-end mt-2 pt-1">
                                                    <button class="btn btn-primary btn-sm">Gửi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>