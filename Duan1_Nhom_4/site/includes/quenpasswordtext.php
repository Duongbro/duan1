<div class="container" id="container">
<div class="form-container sign-up-container">
   
</div>

    <div class="form-container sign-in-container">
    <form action="#" method="post" class="form">
    <h1 class="h1">Đổi mật khẩu</h1>
    <?php
        if(isset($_POST['submit'])){
            $error = array();
            if($_POST['repass'] != $_POST['password']){
                $error['fail'] ='Nhập lại mật khẩu không khớp !';
            }else{
                $error['success'] ='<a href="?page=home">Đổi mật khẩu thành công về trang chủ</a>';
                $user = new users();
                $user->forgetPass($_POST['password'], $_SESSION['mail']);
                header('refresh:3s; index.php?page=home');
            }
        }
    ?>
    <input type="text" name="password" placeholder="Nhập mật khẩu mới" class="input" id="password"  value="<?php if(isset($_POST['password'])) echo $_POST['password']?>"/>
    <input type="text" name="repass" placeholder="Xác nhận lại mật khẩu" class="input" id="repass"  value="<?php if(isset($_POST['repass'])) echo $_POST['repass']?>"/>
    <button type="submit" name="submit">Thay đổi</button>
    <br>
    <?php if(isset($error['fail'])) :?>
        <div class="alert alert-danger" role="alert">
            <?= $error['fail']?>
        </div>
    <?php elseif(isset($error['success'])) :?>
        <div class="alert alert-danger" role="alert">
            <?= $error['success']?>
        </div>    
    <?php else:?>
        <div class="alert alert-danger" role="alert">
            Bạn có thể đổi mật khẩu tại đây
        </div>       
    <?php endif?>       
</form>

    </div>

    <div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-right">
                <h1 class="h1">Chào bạn</h1>
                <p style="color:white;font-weight: 500;" class="p">Để duy trì kết nối vui lòng đổi mật khẩu để đồng hành cùng chúng tôi</p>
               
            </div>
        </div>
    </div>
</div>