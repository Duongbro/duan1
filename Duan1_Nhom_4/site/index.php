<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>KIM - WATCH</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="assets/css/style1.css">

    

    

  


    <!-- Profile User -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
    
</head>

<body>

    <?php
    include_once '../admin/includes/pdo.php';
    // include "../admin/product/product.php";
    // include "../admin/category/category.php";
    include "../admin/user/user.php";
    include "../site/phpemail/index.php";
    
    // include "../admin/comment/comment.php";


    $action = 'home';
    if (isset($_GET['page']))
        $action = $_GET['page'];

    switch ($action) {
        case "home":
            include 'includes/home.php';
            break;
        case "product":
            include 'includes/product.php';
            break;
        case "detail":
            include 'includes/detail.php';
            break;
        case "category":
            include 'includes/category.php';
            break;
        case "login":
            include 'includes/login.php';
            break;
        case "register":
            include 'includes/register.php';
            break;
        case "changepassword":
            include 'includes/changepassword.php';
            break;
        case "quenpassword":
            include 'includes/quenpassword.php';
            break;
        case "formlink":
            include 'includes/formlink.php';
            break;  
        case "quenpasswordtext":
            include 'includes/quenpasswordtext.php';
            break;                        
        case "search":
            include 'includes/search.php';
            break;
        case "cart":
            include 'includes/cart.php';
            break;
        case "profile":
            include 'includes/profile.php';
            break;
        case "contact":
            include 'includes/contact.php';
            break;
        case "about":
            include 'includes/about.php';
            break;
        case "payment":
            include 'includes/payment.php';
            break;
        case "thoat":
            unset($_SESSION['user']);
            unset($_SESSION['user_id']);
            include 'includes/home.php';
            break;
        case "logout":
            header("Location: index.php");
            break;
        default:
            echo "Không tìm thấy file!";
            break;
    }

    ?>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

    <!-- Trang Profile User -->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'></script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

    <!-- Trang đăng nhập/ đăng ký -->
    <script type='text/javascript' src='assets/js/script.js'></script>
    
</body>