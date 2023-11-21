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
                            <h4 class="card-title">Cập nhật Sản Phẩm</h4>
                            <p class="card-description"> </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Giá sản phẩm</label>
                                    <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Mô tả sản phẩm</label>
                                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Mô tả sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Ảnh sản phẩm">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Chọn ảnh</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Loại sản phẩm</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Số lượng</label>
                                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Giá giảm</label>
                                    <input type="number" class="form-control" id="exampleInputCity1" placeholder="Giá giảm">
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Xác nhận</button>
                                <button class="btn btn-light">Hủy</button>
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