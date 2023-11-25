<?php
if (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    $user = new users();
    $checkuser = new users();

    if (empty($name)) {
        $errors['name'] = 'Tên đăng nhập không được bỏ trống.';
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $errors['name'] = 'Tên đăng nhập chỉ có thể chứa các ký tự từ A-Z, a-z và từ 1-9.';
    } else if ($user->checkUsernameExists($name)) {
        $errors['name'] = 'Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.';
    }

    if (empty($email)) {
        $errors['email'] = 'Email không được bỏ trống.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email không hợp lệ. Vui lòng nhập lại.';
    }

    if (empty($password)) {
        $errors['password'] = 'Mật khẩu không được bỏ trống.';
    } else if (strlen($password) < 8) {
        $errors['password'] = 'Mật khẩu phải dài ít nhất 8 ký tự.';
    } else if ($checkuser->eckUchserpasswordExists($password)) {
        $errors['password'] = 'Mật khẩu đã tồn tại. Vui lòng chọn mật khẩu khác.';
    }

    if (empty($errors)) {
        $role_id = 2; // Gán giá trị mặc định cho người dùng mới

        $user = new users();
        $user->addUsers2($name, $email, $password);

        // Thêm thông báo thành công
        $success_message = 'Bạn đã đăng ký thành công!';
    }
}
?>

<div class="container" id="container">
    <div class="form-container sign-up-container">

    </div>
    <div class="form-container sign-in-container">
        <form action="#" class="form" method="post">
            <h1 class="h1">Đăng Ký</h1>

            <input type="text" placeholder="Nhập tên đăng nhập" class="input" name="name" id="name">
            <?php if (isset($errors['name'])): ?>
                <p class="error-message" style="color: red;">
                    <?php echo $errors['name']; ?>
                </p>
            <?php endif; ?>

            <input type="text" placeholder="Nhập email" class="input" name="email" id="email">
            <?php if (isset($errors['email'])): ?>
                <p class="error-message" style="color: red;">
                    <?php echo $errors['email']; ?>
                </p>
            <?php endif; ?>

            <input type="password" placeholder="Nhập mật khẩu" class="input" name="password" id="password">
            <?php if (isset($errors['password'])): ?>
                <p class="error-message" style="color: red;">
                    <?php echo $errors['password']; ?>
                </p>
            <?php endif; ?>

            <button name="dangky" class="button <?php if (empty($errors)) {
                echo 'active';
            } ?>">Đăng Ký</button>

            <?php if (isset($success_message)): ?>
                <p class="success-message" style="color: green;">
                    <?php echo $success_message; ?>
                </p>
                <a href="http://duan1user/?page=login">Quay lại trang đăng nhập</a>
            <?php endif; ?>

        </form>

    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="h1">Chào mừng trở lại!</h1>
                <p style="color:white;font-weight: 500;" class="p">Để duy trì kết nối với chúng tôi vui lòng đăng nhập
                    bằng thông tin cá nhân của bạn</p>

            </div>
            <div class="overlay-panel overlay-right">
                <h1 class="h1">Chào bạn!</h1>
                <p style="color:white;font-weight: 500;" class="p">Nhập thông tin cá nhân của bạn và bắt đầu hành trình
                    với chúng tôi</p>


            </div>

        </div>
    </div>
</div>
