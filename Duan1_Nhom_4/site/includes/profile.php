<?php
include "header.php";
$db = new users();
$profile = $db->getByID($_SESSION['user_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['user_id'])) {
        $user = new users();
        $user_id = $_SESSION['user_id']; // get user id from session
        $name = $_POST['name'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $avatar = $_FILES['img']['name'];

        // upload avatar
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        

        // update user
        $user = $db->updateUser($user_id , $name, $fullname, $email, $phone, $address, $avatar);
        $_SESSION['avatar'] = $avatar;
        $profile = $db->getByID($_SESSION['user_id']); // refresh profile data

        // Thêm thông báo thành công
        echo "<div id='successMessage' style='display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; background-color: #dff0d8; color: #3c763d; padding: 15px; border-radius: 4px;'>
                Cập nhật thành công!
                <button onclick='closeMessage()' style='float: right; border: none; background: none;'>x</button>
              </div>
              <script type='text/javascript'>
                document.getElementById('successMessage').style.display = 'block';
                function closeMessage() {
                    document.getElementById('successMessage').style.display = 'none';
                }
              </script>";
    } else {
        // Handle case where user is not logged in
        echo "Bạn cần đăng nhập để cập nhật thông tin cá nhân.";
    }
}
?>

<!-- Your HTML form goes here -->


<!-- Your HTML form goes here -->






<?php include "header.php"; ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../img/<?php echo $profile['avatar']?>"><span
                        class="font-weight-bold"><?php echo $profile['fullname']?></span><span
                        class="text-black-50"><?php echo $profile['email']?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Thông tin cá nhân</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Tên đăng nhập</label><input type="text"
                            class="form-control" placeholder="Họ và tên" name="name" id="name" value="<?php echo $profile['name']?>"></div>
                        <div class="col-md-6"><label class="labels">Họ và tên</label><input type="text"
                                class="form-control" placeholder="Họ và tên" value="<?php echo $profile['fullname']?>" name="fullname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text"
                                class="form-control" placeholder="Số điện thoại" value="<?php echo $profile['phone']?>" name="phone" id="phone"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                class="form-control" placeholder="Email" value="<?php echo $profile['email']?>" name="email" id="phone"></div>
                        <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text"
                                class="form-control" placeholder="Địa chỉ" value="<?php echo $profile['address']?>" name="address" id="phone"></div>
                        <div class="col-md-12"><label class="labels">Ảnh đại diện</label><input type="file"
                                class="form-control" placeholder="" value="" name="img" id="img"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Lưu Thay
                            Đổi</button></div>
                </div>
            </div>
            <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i> Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
        </div>
    </div>
    </div>
    </div>
</form>
<?php include "footer.php"; ?>
