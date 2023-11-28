<div class="container-scroller">
    <?php include "header.php"; ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-comment-processing"></i>
                    </span> Quản lý bình luận
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
                            <h4 class="card-title">Chi tiết bình luận</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:300px;"> Nội dung </th>
                                            <th style="width:150px;"> Người bình luận </th>
                                            <th style="width:150px;"> Ngày bình luận </th>
                                            <th style="width:150px;"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                
                                        $ds = new comment();
                                        $product_id = $_GET['product_id'];
                                        foreach ($ds->getComment_Detail_Admin($product_id) as $row){
                                    ?>
                                        <tr>
                                            <td><?=$row['content']?></td>
                                            <td><?=$row['user_cmt']?></td>
                                            <td><?=$row['date']?></td>
                                            <td><a href="?page=delete_comment&comment_id=<?=$row['comment_id']?>"><button type="button" class="btn btn-gradient-primary btn-sm">Xóa</button></a></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
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