<div class="container-scroller">
    <?php include "header.php"; ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-tag-multiple"></i>
                    </span> Quản Lý Loại Sản Phẩm
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
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sửa loại sản phẩm</h4>
                            <!-- <p class="card-description"> Basic form elements </p> -->
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên loại</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nhập tên loại">
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Xác nhận</button>
                                <a href="?page=category"><button class="btn btn-light">Hủy</button></a>
                            </form>
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