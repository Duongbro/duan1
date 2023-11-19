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
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Loại Sản Phẩm</h4>
                            <a href="?page=category_add"><button type="button" class="btn btn-gradient-primary btn-sm">Thêm loại</button></a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:150px;"> ID </th>
                                            <th style="width:200px;"> Tên loại </th>
                                            <th style="width:150px;"> Sửa </th>
                                            <th style="width:150px;"> Xóa </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Nam</td>
                                            <td><a href="?page=category_update"><button type="button" class="btn btn-gradient-primary btn-sm">Sửa</button></a></td>
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