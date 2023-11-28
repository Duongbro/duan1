<div class="container" id="container">
    <div class="form-container sign-up-container">

    </div>

    <div class="form-container sign-in-container">
        <form action="#" method="post" class="form">
            <h1 class="h1">Hãy xác nhận mã</h1>
            <?php
                if(isset($_POST['submit'])){
                    $error = array();
                    if($_POST['text'] != $_SESSION['code']){
                        $error['fail'] = 'Mã xác nhận không hợp lệ !';

                    }else{
                        header('location: index.php?page=quenpasswordtext');
                    }
                }
            ?>
         
            <input type="text" name="text" placeholder="Mã xác nhận" class="input"/>







            <button type="submit" name="submit">xác nhận</button>
            <br>
            <?php
                if(isset($error['fail'])) :
            ?>
            <div class="alert alert-danger" role="alert">
                <?= $error['fail']?>
            </div>
            <br>
            <?php else:?>
                <div class="alert alert-danger" role="alert">
                    Hãy nhập mã xác nhận của bạn
                </div>
            <?php endif ?>    
            

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