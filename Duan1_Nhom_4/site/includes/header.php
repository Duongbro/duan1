
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="?page=home" class="logo">
                        <img src="assets/images/logo1.jpg" height="80px">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="?page=home">Trang chủ</a></li>
                        <li class="scroll-to-section"><a href="?page=about">Giới thiệu</a></li>
                        <li class="scroll-to-section"><a href="?page=contact">Liên hệ</a></li>
                        <li class="scroll-to-section"><a href="?page=cart">Giỏ hàng</a></li>
                        <li class="submenu">
                            <a href="?page=product">Sản phẩm</a>
                            <ul>
                                <li><a href="">Nam</a></li>
                                <li><a href="">Nữ</a></li>
                                <li><a href="">Thể thao</a></li>
                            </ul>
                        </li>

                        <?php
                        if (isset($_GET['logout'])) {
                            unset($_SESSION['user']);
                            unset($_SESSION['avatar']);
                            header("Location: index.php?page=home");
                            exit();
                        }

                        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
                        $avatar = isset($_SESSION['avatar']) ? $_SESSION['avatar'] : null;
                        ?>

                        <ul>
                            <li class="submenu">
                                <?php if ($user): ?>
                                    <a href="#">
                                        <img src="../img/<?php echo $avatar;?>" width="35" height="35" style="border-radius: 100px">
                                        <?php echo $user; ?>
                                    </a>
                                    <ul>
                                        <li><a href="?page=profile&user_id=<?= $_SESSION['user_id']; ?>">Hồ sơ của tôi</a>
                                        </li>
                                        <li><a href="">Giỏ hàng</a></li>
                                        <li><a href="?page=changepassword&user_id=<?= $_SESSION['user_id']; ?>">Đổi mật khẩu</a></li>
                                        <li><a href="?logout=true">Đăng xuất</a></li>
                                    </ul>
                                <?php else: ?>
                                <li class="scroll-to-section"><a href="?page=login">Đăng nhập</a></li>
                            <?php endif; ?>
                            </li>
                        </ul>
                        <ul>
                            <?php if ($user): ?>
                            <?php else: ?>
                                <li class="scroll-to-section"><a href="?page=register">Đăng ký</a></li>
                            <?php endif; ?>
                        </ul>




                        <!-- <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                            </ul>
                        </li> -->


                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>