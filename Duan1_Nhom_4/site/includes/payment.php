<?php include "header.php";?>
<article>
    <div class="boxcenter">
        <div class="box-pay">
            <div class="box-pay-left">
                <div class="box-pay-left-left">
                    <h2>Thông tin nhận hàng</h2>
                    <div class="box-form">
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Địa chỉ">
                            </div>
                            <!-- <div class="form-group">
                                <select name="vitri" id="">
                                    <option value="">--Tỉnh thành--</option>
                                    <option value="">Cần Thơ</option>
                                    <option value="">Cà Mau</option>
                                    <option value="">TP.Hồ Chí Minh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="quanhuyen" id="">
                                    <option value="">--Quận huyện--</option>
                                    <option value="">Quận Ninh Kiều</option>
                                    <option value="">Quận Bình Thủy</option>
                                    <option value="">Quận Cái Răng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="phuongxa" id="">
                                    <option value="">--Phường xã--</option>
                                    <option value="">Phường An Khánh</option>
                                    <option value="">Phường An Cư</option>
                                    <option value="">Phường An Hòa</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <textarea name="" id="" cols="40" rows="4" placeholder="Ghi chú (tùy chọn)"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-pay-left-right">
                    <h2>Vận chuyển</h2>
                    <div class="ship">
                        <form action="">
                            <input type="radio">
                            <p>Giao hàng tận nơi</p>
                        </form>
                        <div class="ship-price">
                            <span>35.000₫</span>
                        </div>
                    </div>
                    <div class="bank">
                        <form action="">
                            <input type="radio" name="bank">
                            <label for="">Thanh toán qua VNPAY-QR</label>
                            <hr>
                            <input type="radio" name="bank">
                            <label for="">Thanh toán khi giao hàng (COD)</label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="box-pay-right">
                <div class="sidebar-header">
                    <h2>Đơn hàng (1 sản phẩm)</h2>
                </div>
                <div class="sidebar-content">
                    <div class="scroll-items">
                        <div class="item">
                            <div class="item-img">
                                <img src="assets/images/dongho1.webp" alt="">
                            </div>
                            <div class="item-name">
                                <p>Love Cuban Shirt</p>
                            </div>
                            <div class="item-size">
                                <span>Size M</span>
                            </div>
                            <div class="item-price">
                                <span><strong>1.740.000VNĐ</strong></span>
                            </div>
                            <div class="item-temp">
                                <span>1</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-middle">
                        <div class="content-middle-1">
                            <p>Tạm tính</p>
                            <span>1.740.000₫</span>
                        </div>
                        <div class="content-middle-1">
                            <p>Phí vận chuyển</p>
                            <span>35.000₫</span>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="content-bottom-1">
                            <p>Tổng cộng</p>
                            <span>1.775.000₫</span>
                        </div>
                        <div class="content-bottom-1">
                            <a href="?page=cart"> <- Quay về giỏ hàng</a>
                                <button class="btn-buy">ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php include "footer.php"; ?>