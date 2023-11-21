<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="../content/assets/images/logo1.jpg" height="50px">
                        </div>
                        <h2>Đăng nhập</h2>
                        <h6 class="font-weight-light">Đăng nhập để tiếp tục.</h6>
                        <form class="pt-3" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tài khoản">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu ">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="btn">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?php
$db = new users();
$user = $db->getUsers();
if (isset($_POST['btn'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    foreach ($user as $item) {
        if ($item['name'] == $username && $item['password'] == $password && $item['role'] == 1) {
            $_SESSION['admin'] = $username;
            header('Location: index.php?page=home');
        } else {
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
        }
    }
}
?>