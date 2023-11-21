<?php include "header.php"; ?>
<article>
    <div class="boxcenter2">
        <h1>GIỎ HÀNG</h1>
        <form action="/Giohang/cart.php" method="POST">
            <div class="cart-left">
                <table>
                    <tr class="tr-top">
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr class="tr-bottom">
                        <td class="td-product">
                            <div>
                                <a href="">
                                    <img src="assets/images/dongho1.webp" alt="">
                                </a>
                                <h4>Đồng Hồ Casio 43.5mm Nam MTP-1374D-1AVDF</h4>
                                <span>1.740.000VNĐ</span>
                            </div>
                        </td>
                        <td class="td-temp">
                            <div class="temp">
                                <input type="button" value="<" class="input-left">
                                <input type="text" min="1" value="1" class="input-temp">
                                <input type="button" value=">" class="input-right">
                            </div>
                        </td>
                        <td class="td-price">
                            <b>1.740.000VNĐ</b>
                        </td>
                        <td class="td-delete">
                            <button type=submit name="">X</button>
                        </td>
                        <input type="hidden" name="">
                    </tr>
                    
                </table>
            </div>
            <div class="cart-right">
                <div class="cart-right-top">
                    <span>Tổng tiền</span>
                    <b>1.740.000VNĐ</b>
                </div>
                <div class="cart-right-bottom">
                    <a href="?page=payment">THANH TOÁN</a>
                </div>
            </div>
            <div class="back-product">
                <a href="?page=product">TIẾP TỤC MUA SẮM</a>
            </div>
        </form>

    </div>
</article>
<?php include "footer.php"; ?>