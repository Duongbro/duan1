<div class="container-scroller">
    <?php include "header.php"; ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-account"></i>
                    </span> Quản lý khách hàng
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Quản lý khách hàng</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:150px;"> Ảnh đại diện </th>
                                            <th style="width:200px;"> Họ tên </th>
                                            <th style="width:300px;"> Email </th>
                                            <th style="width:150px;"> Số điện thoại </th>
                                            <th style="width:150px;"> Vai trò </th>
                                            <th style="width:150px;"> Xóa </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="content/assets/images/faces/face1.jpg" class="me-2" alt="image"></td>
                                            <td>Nguyễn Thái Dương</td>
                                            <td>nguyenduongthai000@gmail.com</td>
                                            <td>0949373325</td>
                                            <td>Quản trị viên</td>
                                            <td><button type="button" class="btn btn-gradient-primary btn-sm">Xóa</button></td>
                                        </tr>
                                        <tr>
                                            <td><img src="content/assets/images/faces/face1.jpg" class="me-2" alt="image"></td>
                                            <td>Nguyễn Thái Dương</td>
                                            <td>nguyenduongthai000@gmail.com</td>
                                            <td>0949373325</td>
                                            <td>Quản trị viên</td>
                                            <td><button type="button" class="btn btn-gradient-primary btn-sm">Xóa</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include "footer.php"; ?>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>