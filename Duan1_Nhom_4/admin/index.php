<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="content/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="content/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="content/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="content/assets/images/favicon.ico" />
</head>

<?php
include_once 'includes/pdo.php';
include 'user/user.php';
include "category/category.php";
// include "product/product.php";
// include "comment/comment.php";


$action = 'home';
if (isset($_GET['page']))
    $action = $_GET['page'];
if (!isset($_SESSION['admin'])) {
    $action = "login";
}

switch ($action) {
    case "home":
        include 'includes/home.php';
        break;
    case "login":
        include "includes/login.php";
        break;
    case "category":
        include "includes/category.php";
        break;
    case "product":
        include "includes/product.php";
        break;
    case "user":
        include "includes/user.php";
        break;
    case 'comment':
        include 'includes/comment.php';
        break;
    case 'statistics':
        include 'includes/statistics.php';
        break;
    case 'order':
        include 'includes/order.php';
        break;
    case 'category_add':
        include 'includes/category_add.php';
        break;
    case 'category_update':
        include 'includes/category_update.php';
        break;
    case 'comment_detail':
        include 'includes/comment_detail.php';
        break;
    case 'product_add':
        include 'includes/product_add.php';
        break;
    case 'product_update':
        include 'includes/product_update.php';
        break;
    case "logout":
        unset($_SESSION['admin']);
        header("Location: index.php");
        break;
    default:
        echo "Không tìm thấy file!";
        break;
}
?>

<body>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="content/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="content/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="content/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="content/assets/js/off-canvas.js"></script>
    <script src="content/assets/js/hoverable-collapse.js"></script>
    <script src="content/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="content/assets/js/dashboard.js"></script>
    <script src="content/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>