<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liên hệ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- FONTS
		============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery-ui-slider.css">
    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- OWL CAROUSEL CSS 	
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- OWL CAROUSEL THEME CSS 	
		============================================ -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- BOOTSTRAP CSS 
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME CSS 
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- NORMALIZE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- MAIN CSS 
		============================================ -->
    <link rel="stylesheet" href="css/main.css">

    <!-- STYLE CSS 
		============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- RESPONSIVE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- IE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/ie.css">

    <!-- MODERNIZR JS 
		============================================ -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */

    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */

    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */

    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */

    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */

    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }
    </style>
</head>

<body>
    <?php

// if(isset($_POST['btn']) && ($_POST['btn'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];
//     GuiMail();
// }
if(isset($_POST['btn'])==true) {
    GuiMail();
}
?>
    </head>

    <?php
function GuiMail(){

require "././PHPMailer-master/src/PHPMailer.php";
require "././PHPMailer-master/src/SMTP.php";
require "././PHPMailer-master/src/Exception.php";


$mail=new PHPMailer\PHPMailer\PHPMailer(true);

try{
    $mail->SMTPDebug = 0;  //hiện số 2 để kiểm tra cách hoạt động của hàm== hiển  thị lỗi
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    //Set the hostname of the mail server
    // $mail->Host = 'smtp.gmail.com'; 
    $mail->Host = 'smtp.mailtrap.io'; 
    // cho phép nó
    $mail->SMTPAuth =true;
    // $mail->Username = 'thiennhps20466@fpt.edu.vn';
    // $mail->Password = '';
    $mail->Username = '67d3040c6689c6';
    $mail->Password = '609976f6c22873';
    $mail->SMTPSecure = 'tls'; //TLS/SSL 2 kiểu mã hóa
    $mail->Port = 465; //587/465
    // $mail->setOAuth($oauthTokenProvider);
// từ
    $mail->setFrom('eulalie_perfume@gmail.com', 'Eulalie Perfume'); 
    // tới
    $mail->addAddress('dt.trung@gmail.com', 'Khách Hàng');
    // $mail->addAddress("{$_POST['email']}","{$_POST['username']}");

    $mail->isHTML(true);
    $mail->Subject = 'Thư Gửi Từ Eulalie';
    $noidungthu=file_get_contents("noidunglienhe.txt");
    $noidungthu=str_replace(
        [  '{username}',    '{email}',    '{ContactMessage}'],
        [ $_POST['username'],   $_POST['email'],   $_POST['ContactMessage' ] ] ,
        $noidungthu  );

    $mail->Body=nl2br($noidungthu);
    $mail->smtpConnect(array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" =>false,
            "allow_self_signed" => true
        )
        ));
        $mail->send();  
            header("location:site/view/lienhe_camon.php");
            // echo 'Đã gửi mail xong';
    }catch(Exception $e){
        echo 'Mail không gửi được. Lỗi ' , $mail->ErrorInfo;
    }
}

?>

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">Trang chủ</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Liên hệ</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title about-page-title">liên hệ</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- SINGLE-ABOUT-INFO START -->
                    <div class="single-about-info">
                        <div class="our-company">
                            <h3>Công Ty EULALIE</h3>
                            <strong>Thông tin liên hệ NƯỚC HOA EULALIE <br> Cửa hàng nước hoa số 1 Việt Nam.</strong>
                            <p>Nước hoa EULALIE là sản phẩm đến từ Việt Nam chuyên cung cấp các sản phẩm chính hãng
                                thuộc các lĩnh vực thời trang như, nước hoa, bodymiss Tại đây bạn có thể dễ dàng tìm
                                thấy và mua hàng trực tuyến trên website của chúng tôi,
                                sản phẩm thuộc các thương hiệu hàng đầu trên thế giới.</p>
                            <div class="company-list-menu">
                                <ul>
                                    <li>Sản phẩm tốt nhất</li>
                                    <li>Hỗ trợ dịch vụ tốt nhất</li>
                                    <li>Hỗ trợ đổi trả 30 ngày đầu và hoàn tiền 100%</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-ABOUT-INFO END -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-about-info">
                        <!-- OUR-TEAM START -->
                        <div class="our-team">
                            <h3>Ngày Thành Lập</h3>
                            <strong>CTY TNHH NƯỚC HOA EULALIE </strong>
                            <p>Ra đời vào ngày 11/09/2022 và hiện tại là nơi cung cấp hơn 200 nhãn hiệu nước hoa cao cấp
                                trên thế giới. Định hướng của chúng tôi là trở thành nhà cung cấp nước hoa số 1 tại VN,
                                mang lại sự lựa chọn đa dạng, tiết kiệm tiền
                                & thời gian, đồng thời mang đến sự yên tâm & hài lòng đến với khách hàng..</p>
                            <!-- <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p> -->
                        </div>
                        <!-- OUR-TEAM END -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-about-info">
                        <!-- OUR-TESTIMONIALS START -->
                        <div class="our-testimonials">
                            <h3> Liên hệ</h3>
                            <!-- SINGLE-TESTIMONIALS START -->
                            <div class="single-testimonials">
                                <div class="testimonials-text">
                                    <span class="before">
                                        <a href="index.php"><i class="fa-solid fa-house"></i> Website:
                                            eulalie.online</span></a>
                                    <br> Điện thoại: 078.538.6929
                                    <br> Địa chỉ: 81 Điện Biên Phủ, phường 15, quận Bình Thạnh, TP.HCM
                                    <br> Email: eulelia@gmail.com <br>
                                    <span class="after"></span>
                                </div>
                            </div>
                            <p>CÁC THÔNG TIN HỮU ÍCH CHO BẠN ?</p>
                            <!-- SINGLE-TESTIMONIALS END -->
                            <!-- SINGLE-TESTIMONIALS START -->
                            <div class="single-testimonials">
                                <div class="testimonials-text">
                                    <span class="before">
                                        <a href=""></a> Chính sách bán hàng</span>
                                    <br><a href="">Chính sách bảo hành</a><br>
                                    <a href="">Chính sách đổi trả</a><br>
                                    <a href="">Chính sách thanh toán</a><br>
                                    <a href="">Chính sách hoàn tiền</a><br>
                                    <span class="after"></span>
                                </div>
                            </div>

                            <!-- SINGLE-TESTIMONIALS END -->
                        </div>
                        <!-- OUR-TESTIMONIALS END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <!-- BRAND-CLIENT-AREA START -->

    <!-- BRAND-CLIENT-AREA END -->
    <!-- COMPANY-FACALITY START -->
    <!-- FROM GỬI THÔNG TIN LIÊN HỆ -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->

                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title contant-page-title">THÔNG TIN KHÁCH HÀNG - DỊCH VỤ HỖ TRỢ </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- CONTACT-US-FORM START -->
                    <div class="contact-us-form">
                        <div class="contact-form-center">
                            <h3 class="contact-subheading">GỬI HỖ TRỢ</h3>
                            <!-- CONTACT-FORM START -->
                            <form class="contact-form" id="contactForm" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <!-- <div class="form-group primary-form-group">
                                            <label>Đề mục</label>
                                            <div class="con-form-select">
                                                <select id="conForm" name="conform1">
                                                    <option value="" name="conform">Dịch vụ hỗ trợ</option>
                                                    <option value="" name="conform">Bảo hành sản phẩm</option>
                                                    <option value="" name="conform">Hỗ trợ đặt hàng</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group primary-form-group">
                                            <label>Họ tên</label>
                                            <input type="text" class="form-control input-feild" id="user"
                                                name="username" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-feild" id="email" name="email"
                                                value="">
                                        </div>
                                        <!-- <div class="form-group primary-form-group">
                                            <div class="file-uploader">
                                                <label>Tệp đính kèm</label>
                                                <input type="file" class="form-control" name="fileUpload">
                                                <span class="filename"  name="fileUpload">Chọn tệp tin</span>
                                                <span class="action" name="fileUpload" >Chọn tệp tin</span>
                                            </div>
                                        </div> -->
                                        <!-- <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Gửi<i class="fa fa-chevron-right"></i></button> -->
                                        <input class="id" type="submit" name="btn" id="sendMessage" value="Gửi"
                                            name="gui" style="margin-top:30px;">
                                        <!-- <input class="id" type="reset" name="submit" id="sendMessage" value="Hủy"
                                            name="huy"> -->
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Nội Dung Liên Hệ</label>
                                                <textarea class="contact-text" name="ContactMessage"></textarea>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- CONTACT-FORM END -->
                        </div>
                    </div>
                    <!-- CONTACT-US-FORM END -->
                </div>
            </div>
        </div>
    </section>

    <!-- FROM GỬI THÔNG TIN LIÊN HỆ -->
    <section class="brand-client-area">
        <div class="container">
            <div class="row">
                <!-- BRAND-CLIENT-ROW START -->
                <div class="brand-client-row">
                    <div class="center-title-area">
                        <h2 class="center-title">THƯƠNG HIỆU - KHÁCH HÀNG </h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <!-- CLIENT-CAROUSEL START -->
                            <div class="client-carousel">
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/cavin.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/channel.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/gucii.jpg" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/coach.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/cavin (1).png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>



                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="public/img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                            </div>
                            <!-- CLIENT-CAROUSEL END -->
                        </div>
                    </div>
                </div>
                <!-- BRAND-CLIENT-ROW END -->
            </div>
        </div>
    </section>
    <section class="company-facality">
        <div class="container">
            <div class="row">
                <div class="company-facality-row">
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">MIỄN PHÍ VẬN CHUYỂN</h3>
                                <span>Cho đơn hàng có giá trị trên 500.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">HỖ TRỢ 24/7</h3>
                                <span>Hỗ trợ tư vấn 24/7 trực tiếp tại website</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">CẬP NHẬT HẰNG NGÀY</h3>
                                <span>Kiểm tra sản phẩm tại store.</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">HỖ TRỢ ĐỔI TRẢ 30 NGÀY ĐẦU</h3>
                                <span>Hoàn tiền 100%</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                </div>
            </div>
        </div>
    </section>


    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/slider/BANNER NƯỚC HOA NỮ.jpg" style="width:100%">
            <div class="text">EULALIE</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/slider/nuoc hoa nam.jpg" style="width:100%">
            <div class="text">EULALIE</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/cheque.png" style="width:100%">
            <div class="text">EULALIE</div>
        </div>

    </div>
    <br>

    <!-- <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div> -->
    <!-- COMPANY-FACALITY END -->

    <!-- FOOTER-TOP-AREA END -->
    <!-- COPYRIGHT-AREA START -->



    <!-- COPYRIGHT-AREA END -->
    <!-- JS 
		===============================================-->
    <!-- jquery js -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- fancybox js -->
    <script src="js/jquery.fancybox.js"></script>

    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min.js"></script>

    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>

    <!-- jqueryui js -->
    <script src="js/jqueryui.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    //
    </script>


    <script src="js/main.js"></script>

    <script>
    //     let slideIndex = 0;
    //     showSlides();

    //     function showSlides() {
    //         let i;
    //         let slides = document.getElementsByClassName("mySlides");
    //         let dots = document.getElementsByClassName("dot");
    //         for (i = 0; i < slides.length; i++) {
    //             slides[i].style.display = "none";
    //         }
    //         slideIndex++;
    //         if (slideIndex > slides.length) {
    //             slideIndex = 1
    //         }
    //         for (i = 0; i < dots.length; i++) {
    //             dots[i].className = dots[i].className.replace(" active", "");
    //         }
    //         slides[slideIndex - 1].style.display = "block";
    //         dots[slideIndex - 1].className += " active";
    //         setTimeout(showSlides, 2000); // Change image every 2 seconds
    //     }
    //
    </script>