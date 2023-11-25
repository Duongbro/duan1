<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['logout'])) {
        // Nếu người dùng muốn đăng xuất
        unset($_SESSION['user']);
        header("Location: http://duan1user/?#"); // Chuyển hướng đến trang chủ
        exit();
    } else {
        // Nếu người dùng muốn đăng nhập
        $name = $_POST["name"];
        $password = $_POST["password"];

        $users = new users();
        $isValid = $users->chaeckUsers($name,$password);
       
        $users = new users();
        $get_user = $users->getUsers();
        foreach($get_user as $get_user){
            if($get_user ['name'] == $name && $get_user ['password'] == $password){
                $_SESSION['user_id'] = $get_user['user_id'];
                $_SESSION['avatar'] = $get_user['avatar']; // Lưu avatar vào session
            }
        }

        if ($isValid) {
            $_SESSION['user'] = $name; // Lưu tên người dùng vào session
            header("Location: http://duan1user/?#"); // Chuyển hướng đến trang chủ
            exit();
        } else {
            echo "<span style='color:red'>Tên đăng nhập hoặc mật khẩu không đúng!</span>";
        }
    }
}
?>











<div class="container" id="container">
<div class="form-container sign-up-container">
   
</div>

    <div class="form-container sign-in-container">
        <form action="#" method="post" class="form">
            <h1 class="h1">Đăng Nhập</h1>
            <input type="text" name="name" placeholder="Tên đăng nhập" class="input" id="name" />
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    echo "<span style='color:red'>Tên đăng nhập là bắt buộc.</span>";
                }
            }
            ?>


            <input type="password" name="password" placeholder="Mật khẩu" class="input" id="password" />
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["password"])) {
                    echo "<span style='color:red'>Mật khẩu là bắt buộc.</span>";
                } else {
                    // Nếu người dùng muốn đăng nhập
                    $name = $_POST["name"];
                    $password = $_POST["password"];

                    $users = new users();
                    $isValid = $users->chaeckUsers($name,$password); 

                    if ($isValid) {
                        $_SESSION['user'] = $name; // Lưu tên người dùng vào session
                        header("Location: http://duan1user/?#"); // Chuyển hướng đến trang chủ
                        exit();
                    } else {
                        echo "<span style='color:red'>Tên đăng nhập hoặc mật khẩu không đúng!</span>";
                    }
                }
            }
            ?>
            <a href="#">Quên mật khẩu?</a>
            
            <button type="submit">Đăng nhập</button>
        </form>

    </div>

    <div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-right">
                <h1 class="h1">Chào mừng trở lại!</h1>
                <p style="color:white;font-weight: 500;" class="p">Để duy trì kết nối với chúng tôi vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                <a href="?page=register"><button class="ghost" id="signUp">Đăng Ký</button></a>
            </div>
        </div>
    </div>
</div>