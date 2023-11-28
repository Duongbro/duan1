<div class="container" id="container">
    <div class="form-container sign-up-container">

    </div>

    <div class="form-container sign-in-container">
    <form action="#" method="post" class="form">
        <?php
        if (isset($_POST['submit'])) {
            $error = array();
            $email = $_POST['email'];
            if ($email == '') {
                $error['email'] = 'Không được để Trống';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'Email không hợp lệ';
            }
            if (empty($error)) {
                $user = new users();
                $result = $user->getUserByEmail($email);
                $code = substr(rand(0, 999999), 0, 6);
                $title = "Quên mật khẩu";
                $content = "Mã xác nhận của bạn là: <span style='color:green'>" . $code . "</span>";
                $mail = new Mailer();
                $mail->senMail($title, $content, $email);

                $_SESSION['mail'] = $email;
                $_SESSION['code'] = $code;
                header('location: index.php?page=formlink');
            }
        }
        ?>

        <h1 class="h1">Đăng nhập email của bạn</h1>
        <input type="email" name="email" placeholder="Đăng nhập email" class="input" id="email" />
        <span style="color: red;">
            <?php if (isset($error['email']))
                echo $error['email'] ?>
            </span><br><br>
            <button type="submit" name="submit">Gửi xác nhận qua email</button>

        </form>

    </div>

        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-right">
                    <h1 class="h1">Chào bạn</h1>
                    <p style="color:white;font-weight: 500;" class="p">Để duy trì kết nối với chúng tôi vui lòng kiểm tra
                        email</p>

                </div>
            </div>
        </div>
    </div>