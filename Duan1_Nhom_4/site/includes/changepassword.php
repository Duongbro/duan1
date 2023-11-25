<?php
    include_once 'users.php'; // Assuming users.php is in the same directory
    $users = new users();
    $messageCurrent = '';
    $messageNew = '';
    $messageConfirm = '';
    $messageSuccess = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        if(empty($currentPassword)) {
            $messageCurrent = '<span style="color:red;">Vui lòng không để trống mật khẩu hiện tại.</span>';
        } 
        if(empty($newPassword)) {
            $messageNew = '<span style="color:red;">Vui lòng không để trống mật khẩu mới.</span>';
        } 
        if(empty($confirmPassword)) {
            $messageConfirm = '<span style="color:red;">Vui lòng không để trống mật khẩu xác nhận.</span>';
        } 

        if(!empty($currentPassword) && !empty($newPassword) && !empty($confirmPassword)) {
            $user_id = $_SESSION['user_id']; // Assuming you have session started and user_id stored in session
            $user = $users->getByID($user_id);

            if ($user['password'] != $currentPassword) {
                $messageCurrent = '<span style="color:red;">Mật khẩu hiện tại không đúng.</span>';
            } else if ($newPassword != $confirmPassword) {
                $messageConfirm = '<span style="color:red;">Mật khẩu mới và mật khẩu xác nhận không khớp.</span>';
            } else {
                $users->doimatkhau($newPassword, $user_id);
                $messageSuccess = '<span style="color:green;">Đổi mật khẩu thành công. <a href="?page=home">Quay về trang chủ</a></span>';
            }
        }
    }
?>

<div class="container" id="container">
    <div class="form-container sign-up-container">

    </div>
    <div class="form-container sign-in-container">
        <form action="#" class="form" method="post">
            <h1 class="h1">ĐỔI MẬT KHẨU</h1>

            <input type="password" placeholder="Mật khẩu hiện tại" class="input" name="currentPassword" id="currentPassword">
            <span class="error"><?php echo $messageCurrent; ?></span>

            <input type="password" placeholder="Mật khẩu mới" class="input" name="newPassword" id="newPassword">
            <span class="error"><?php echo $messageNew; ?></span>

            <input type="password" placeholder="Xác nhận mật khâu mới" class="input" name="confirmPassword" id="confirmPassword">
            <span class="error"><?php echo $messageConfirm; ?></span>

            <button  type="submit">Thay đổi</button>

            <span class="success"><?php echo $messageSuccess; ?></span>

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
                <p style="color:white;font-weight: 500;" class="p">Bạn có thể đổi mật khẩu để tiếp tục hành trình </p>


            </div>

        </div>
    </div>
</div>
