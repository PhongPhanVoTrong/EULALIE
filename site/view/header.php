<?php


global $page_title;


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
} ?>
<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= isset($page_title) ? $page_title : 'Trang chủ' ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


    <!-- flatsome  -->
    <link rel='stylesheet' id='flatsome-main-css'
        href='https://theperfume.vn/wp-content/themes/flatsome-3.11.3/assets/css/flatsome.css?ver=3.11.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-shop-css'
        href='https://theperfume.vn/wp-content/themes/flatsome-3.11.3/assets/css/flatsome-shop.css?ver=3.11.0'
        type='text/css' media='all' />

    <!-- FONTS
		============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/animate.css">

    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/jquery.fancybox.css">

    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/jquery.bxslider.css">

    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/nivo-slider.css">

    <!-- OWL CAROUSEL CSS 	
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS 	
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/owl.theme.css">

    <!-- BOOTSTRAP CSS 
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/bootstrap.min.css">

    <!-- FONT AWESOME CSS 
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/font-awesome.min.css">

    <!-- NORMALIZE CSS 
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/normalize.css">

    <!-- MAIN CSS 
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/main.css">

    <!-- STYLE CSS 
		============================================ -->


    <!-- RESPONSIVE CSS 
		============================================ -->
    <link rel="stylesheet" href="public/css/csslayout/responsive.css">

    <link rel="stylesheet" href="public/css/csslayout/cart.css">
    <link rel="stylesheet" href="public/css/csslayout/style.css">


    <!-- IE CSS 
		============================================ -->



    <!-- MODERNIZR JS 
		=========================================== = -->

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <style>
    .header-right-callus a img {
        margin: -19px -5px 0 0;
        border-radius: 50%;

    }

    .nav-item {
        width: 30px;
    }

    .single-product-item .product-image img {
        width: 254px;
        height: 263px;
    }

    .product-info a {
        height: 37px;
    }

    #info {
        display: none;
        margin-top: -8px;
    }

    .sidebar {
        z-index: 2;
        margin-top: 8px;
        position: absolute;
        background-color: #fff;
        width: 120px;
        height: auto;
        /* border:none; */
        opacity: 0.9;
        border-radius: 2px;
        box-shadow: 0px 0px 1px 1px #999999;
    }

    #zindex {
        z-index: 1;
        position: absolute;
    }

    .owl-wrapper-outer .owl-wrapper .owl-item .item .single-client img {
        width: 200px;
        height: 70px;
    }

    .single-latest-post img {
        width: 259px;
        height: 162px;
    }

    .mainmenu nav ul li .home-var-menu {
        left: 110px;
        position: absolute;
        width: 220px;
        z-index: 999999;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
    }

    .mainmenu nav ul li ul.home-menu:before {
        content: "";
        position: absolute;
        top: -5px;
        left: 25px;
        border-bottom: 10px solid rgb(58, 61, 66);
        border-top: 10px solid rgba(58, 61, 66, 0);
        border-left: 10px solid rgba(58, 61, 66, 0);
        border-right: 10px solid rgba(58, 61, 66, 0);
    }

    .mainmenu nav ul li ul.home-menu {
        padding-top: 0px;
    }
    </style>
    <script>
    function show() {
        var showBtn = document.getElementById('info');
        showBtn.style.display = "block";
    }

    function hide() {
        var showBtn = document.getElementById('info');
        showBtn.style.display = "none";
    }

    function login() {
        window.location = "login.php";
    }

    function thongtin() {
        window.location = "index.php?act=thongtin";
    }
    </script>

</head>

<body>

    <section class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- LOGO START -->
                    <div class="logo">
                        <a href="index.php"><img src="public/img/logo11.png" alt="EULALIE" style="width:150px;" /></a>
                    </div>
                    <!-- LOGO END -->
                    <!-- HEADER-RIGHT-CALLUS START -->
                    <div class="header-right-callus">
                        <!-- <h3>Liên hệ</h3>
                        <span>078.538.6929</span> -->

                        <!-- Chưa đăng nhập -->
                        <?php if (empty($_SESSION['hoten'])) : ?>
                        <li class="nav-item" onclick="login()" style="cursor:pointer">
                            <!-- <a href="login.php"><img src="https://cdn-icons-png.flaticon.com/128/1144/1144760.png" alt="" width="35px"></a> -->

                            <span class="admin-name">
                                <a href="login.php" onclick="login()"><img src="public/img/logo-login1.PNG" alt=""
                                        data-toggle="dropdown" role="button" aria-expanded="false"
                                        class="nav-link dropdown-toggle" alt="user-img" class="img-circle user-img"
                                        id="toggle_sidebar" onmouseover="show()" onmouseout="hide()">
                                    <!--                                            
                                                    <img src="" width="50px" alt="user-img"
                                                        class="img-circle user-img" id="toggle_sidebar"
                                                        onmouseover="show()" onmouseout="hide()" > -->
                                    <div class="main" id="info">
                                        <ul class="sidebar" id="info2" onmouseover="show()" onmouseout="hide()">
                                            <!-- Chưa đăng nhập -->

                                            <li class="menu-item">
                                                <a href="login.php">Hi!&nbsp;
                                                    <?php echo ('Khách hàng'); ?></a>
                                            </li>
                                            <br>
                                            <li class="menu-item">
                                                <a href="forget-pass.php" style="margin-left:0px 4px 0px 0px;">Quên mật
                                                    khẩu</a>
                                            </li>

                                        </ul>

                                    </div>
                            </span>
                            </a>



                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">



                                <li><a href=""><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My
                                        Account</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My
                                        Profile</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-money author-log-ic"></span>User
                                        Billing</a>
                                </li>
                                <li><a href=""><span
                                            class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log
                                        Out</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif ?>

                        <!-- Đã đăng nhập -->
                        <?php if (isset($_SESSION['hoten'])) : ?>
                        <li class="nav-item" onclick="thongtin()" style="cursor:pointer">
                            <span class="admin-name">
                                <a href="index.php?act=thongtin" onclick="thongtin()">
                                    <img src="public/img/logo-login1.PNG" alt="" data-toggle="dropdown" role="button"
                                        aria-expanded="false" class="nav-link dropdown-toggle" alt="user-img"
                                        class="img-circle user-img" id="toggle_sidebar" onmouseover="show()"
                                        onmouseout="hide()">
                                    <!--                                            
                                                        <img src="" width=" 50px" alt="user-img"
                                        class="img-circle user-img" id="toggle_sidebar" onmouseover="show()"
                                        onmouseout="hide()"> -->
                                    <div class="main" id="info">
                                        <ul class="sidebar" id="info2" onmouseover="show()" onmouseout="hide()">


                                            <li class="menu-item">
                                                Hi!&nbsp;<?php echo ($_SESSION['hoten']); ?>
                                            </li>
                                            <br>
                                            <li><a href="index.php?act=thongtin">Thông tin</a></li>
                                            <br>
                                            <li class="menu-item">
                                                <a href="change-pass.php" style="margin-left:0px 4px 0px 0px;">Đổi
                                                    mật khẩu</a>
                                            </li>
                                            <br>
                                            <li class="menu-item">
                                                <a href="index.php?logout='1">
                                                    Đăng xuất
                                                </a>
                                            </li>

                                        </ul>

                                    </div>
                            </span>

                            </a>



                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">



                                <li><a href=""><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My
                                        Account</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My
                                        Profile</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-money author-log-ic"></span>User
                                        Billing</a>
                                </li>
                                <li><a href=""><span
                                            class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                </li>
                                <li><a href=""><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log
                                        Out</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif ?>
                    </div>
                    <!-- HEADER-RIGHT-CALLUS END -->
                    <!-- CATEGORYS-PRODUCT-SEARCH START -->

                    <div class="categorys-product-search">
                        <form action="index.php?act=timkiem" method="POST" class="search-form-cat">
                            <div class="search-product form-group">
                                <!-- <select name="catsearch" class="cat-search">
                                    <option value="">Tìm kiếm</option>
                                </select> -->
                                <input type="text" class="form-control search-form" name="tukhoa"
                                    placeholder="Tìm kiếm sản phẩm....." />
                                <!-- <input type="submit" name="timkiem" value="Gửi"> -->
                                <button class="search-button" value="Search" name="timkiem" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- CATEGORYS-PRODUCT-SEARCH END -->
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER-MIDDLE END -->
    <!-- MAIN-MENU-AREA START -->
    <header class="main-menu-area">
        <div class="container">
            <div class="row">

                <!-- MAINMENU START -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                    <div class="mainmenu">
                        <nav>
                            <ul class="list-inline mega-menu">
                                <li class="active"><a href="index.php">Trang chủ</a>
                                    <!-- DROPDOWN MENU START -->
                                    <!-- <div class="home-var-menu">
                                        <ul class="home-menu">
                                            <li><a href="index.html">Home variation 1</a></li>
                                            <li><a href="index-2.html">Home variation 2</a></li>
                                        </ul>
                                    </div> -->
                                    <!-- DROPDOWN MENU END -->
                                </li>
                                <?php
                                // include "site/model/loai.php";
                                foreach ($dsloai as  $loai) {
                                    # code...
                                    echo  ' 
                                                <li><a href="index.php?act=nuochoa&idloai=' . $loai['idloai'] . ' ">'
                                        . $loai['tenloai'] . '</a></li>   
                                                ';
                                }
                                ?>
                                <!-- <li>
                                    <a href="index.php?act=nuochoanam">Nước Hoa Nam</a>

                                </li>
                                <li>
                                    <a href="index.php?act=nuochoanu">Nước Hoa Nữ</a>

                                </li> -->
                                <!-- <li>
                                    <a href="shop-gird.html">Thương Hiệu</a>
                                   
                                    <div class="drodown-mega-menu">
                                        <div class="left-mega col-xs-6">
                                            <div class="mega-menu-list">
                                                <a class="mega-menu-title" href="shop-gird.html">A</a>
                                                <ul>
                                                    <li><a href="shop-gird.html">ACCENDIS</a></li>
                                                    <li><a href="shop-gird.html">AJMAL </a></li>
                                                    <li><a href="shop-gird.html">AMOUROUD</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-list">
                                                <a class="mega-menu-title" href="shop-gird.html">B</a>
                                                <ul>
                                                    <li><a href="shop-gird.html">BALENCIAGA</a></li>
                                                    <li><a href="shop-gird.html">BOIS 1920</a></li>
                                                    <li><a href="shop-gird.html">BURBERRY</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right-mega col-xs-6">
                                            <div class="mega-menu-list">
                                                <a class="mega-menu-title" href="shop-gird.html">C</a>
                                                <ul>
                                                    <li><a href="shop-gird.html">CALVIN KLEIN</a></li>
                                                    <li><a href="shop-gird.html">CHANNEL</a></li>
                                                    <li><a href="shop-gird.html">CHLOE</a></li>
                                                    <li><a href="shop-gird.html">COACH</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-list">
                                                <a class="mega-menu-title" href="shop-gird.html">D</a>
                                                <ul>
                                                    <li><a href="shop-gird.html">DIESEL </a></li>
                                                    <li><a href="shop-gird.html">DONNA KARAN</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </li> -->

                                <li>
                                    <a href="index.php?act=lienhe">Liên Hệ</a>

                                </li>
                                <!-- <li>
                                    <a href="index.php?act=loai">Loại</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- MAINMENU END -->



                <!-- SHOPPING-CART START -->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                    <div class="shopping-cart-out pull-right">
                        <div class="shopping-cart">
                            <a class="shop-link" href="index.php?act=giohang" title="View my shopping cart">
                                <i class="fa fa-shopping-cart cart-icon"></i>
                                <b>Giỏ hàng</b>
                                <span class="ajax-cart-quantity"></span>
                            </a>
                            <div class="shipping-cart-overly" style="overflow-y: auto;">
                                <?php
                                $tongtien = 0;
                                foreach ($_SESSION['cart'] as $sp) {
                                    extract($sp);
                                    $tongtien += $dongia * $soluong; ?>
                                <div class="shipping-item">
                                    <span class="cross-icon"><a href="index.php?act=delonecart&id=<?= $id ?>"><i
                                                class="fa fa-times-circle"></i></a></span>
                                    <div class="shipping-item-image">
                                        <a href="#"><img src="public/img/product/imgnb/<?= $img ?>" alt="shopping image"
                                                width="80px" /></a>
                                    </div>
                                    <div class="shipping-item-text">
                                        <span>
                                            <?= $tensp ?>
                                            <span class="pro-quan-x">x</span>
                                            <?= $soluong ?>
                                        </span>
                                        <!-- <span class="pro-quality"><a href="#">S,Gary</a></span> -->
                                        <p><?= number_format($dongia, 0, '.', ',') ?> đ</p>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="shipping-total-bill">
                                    <!-- <div class="cart-prices">
                                        <span class="shipping-cost">$2.00</span>
                                        <span>Shipping</span>
                                    </div> -->
                                    <div class="total-shipping-prices">
                                        <span class="shipping-total"><?= number_format($tongtien, 0, '.', ',') ?>
                                            đ</span>
                                        <span>Tổng tiền</span>
                                    </div>
                                </div>
                                <div class="shipping-checkout-btn">
                                    <a href="index.php?act=thanhtoan">Thanh toán <i class="fa fa-chevron-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- SHOPPING-CART END -->
            </div>
            <div class="row">
                <!-- MOBILE MENU START -->
                <div class="col-sm-12 mobile-menu-area">
                    <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                        <span class="mobile-menu-title">MENU</span>
                        <nav>
                            <ul>
                                <li><a href="index.html">Trang chủ</a>
                                    <ul>
                                        <li><a href="index.html">Home variation 1</a></li>
                                        <li><a href="index-2.html">Home variation 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-gird.html">Women</a>
                                    <ul>
                                        <li><a href="shop-gird.html">Tops</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-Shirts</a></li>
                                                <li><a href="shop-gird.html">Blouses</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-gird.html">Dresses</a>
                                            <ul>
                                                <li><a href="shop-gird.html">Casual Dresses</a></li>
                                                <li><a href="shop-gird.html">Summer Dresses</a></li>
                                                <li><a href="shop-gird.html">Evening Dresses</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="shop-gird.html">men</a>
                                    <ul>
                                        <li><a href="shop-gird.html">Tops</a>
                                            <ul>
                                                <li><a href="shop-gird.html">Sports</a></li>
                                                <li><a href="shop-gird.html">Day</a></li>
                                                <li><a href="shop-gird.html">Evening</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-gird.html">Blouses</a>
                                            <ul>
                                                <li><a href="shop-gird.html">Handbag</a></li>
                                                <li><a href="shop-gird.html">Headphone</a></li>
                                                <li><a href="shop-gird.html">Houseware</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-gird.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-gird.html">Houseware</a></li>
                                                <li><a href="shop-gird.html">Home</a></li>
                                                <li><a href="shop-gird.html">Health & Beauty</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop-gird.html">clothing</a></li>
                                <li><a href="shop-gird.html">tops</a></li>
                                <li><a href="shop-gird.html">T-shirts</a></li>
                                <li><a href="#">Delivery</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- MOBILE MENU END -->
            </div>
        </div>
    </header>