<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- <link rel="stylesheet" href="chitiet.css"> -->
<style>
.wrapper {
    background-color: #ffffff;
    height: 1020px;
    width: 1054px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 50px;
    border-radius: 7px 7px 0 0;
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    border-bottom: 1px solid gray;
}

.wrapper .product-img .btn_container #previous,
.wrapper .product-img .btn_container #next {
    background-color: rgb(255, 255, 255);
    position: absolute;
    width: 40px;
    font-size: 35px;
    border: none;
    color: black;
    top: 65%;
    cursor: pointer;
    opacity: 0.2;

}

.wrapper .product-img .btn_container #next {
    left: 640px;
}

.wrapper .product-img .btn_container #previous {
    right: 1127px;
}

.product-img .btn_container #previous:hover,
.product-img .btn_container #next:hover {
    background-color: rgb(209, 209, 209);

}

.wrapper .product-img {
    float: left;
    height: 420px;
    width: 510px;
}

.wrapper .product-img img {
    margin-top: 50px;
    margin-left: 100px;
}

.wrapper .product-info {
    float: left;
    height: 420px;
    width: 500px;
    border-radius: 0 7px 10px 7px;
    background-color: #ffffff;
}

.wrapper .product-text {
    height: 300px;
    width: 400px;
}

.wrapper .product-text h1 {
    margin: 0 0 10px 38px;
    padding-top: 52px;
    font-size: 34px;
    color: #474747;
}

.wrapper .product-text h1,
.wrapper .product-price-btn p {
    font-family: 'Bentham', serif;
}

.wrapper .product-text h2 {
    margin: 0 0 47px 38px;
    font-size: 13px;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    color: #d2d2d2;
    letter-spacing: 0.2em;
}

.wrapper .product-text p {
    height: 125px;
    margin: 0 0 0 38px;
    font-family: 'Playfair Display', serif;
    color: #8d8d8d;
    line-height: 1.7em;
    font-size: 15px;
    font-weight: lighter;
    overflow: hidden;
}

.wrapper .product-price {
    height: 40px;
    width: 327px;
    margin-top: 17px;
    position: relative;
}

.wrapper .product-price p {
    display: inline-block;
    position: absolute;
    top: -13px;
    height: 50px;
    font-family: 'Trocchi', serif;
    margin: 0 0 0 38px;
    font-size: 28px;
    font-weight: lighter;
    color: red;
}

.wrapper .product-price span {
    display: inline-block;
    height: 50px;
    font-family: 'Suranna', serif;
    font-size: 34px;
    font-weight: 500;
}

.wrapper .product-info .button {
    width: 500px;
    float: left;
    margin-left: 10px;
}

.wrapper .product-info .button button {
    margin: 0 0 0 20px;
    height: 50px;
    width: 176px;
    box-sizing: border-box;
    border: transparent;
    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: #ffffff;
    background-color: black;
    cursor: pointer;
    outline: none;
}

.wrapper .product-info .button button:hover {
    background-color: gray;
    transform: scale(1.1);
}

.wrapper .spnb {
    margin: 0 auto;
    margin-top: 520px;
    width: 1054px;

}

.wrapper .spnb .product {
    margin: 0 auto;
    width: 1000px;
    height: 360px;
}

.wrapper .spnb .sp {
    margin: 5px;
    padding: 10px;
    width: 230px;
    height: 350px;
    float: left;
    border-radius: 5px;
    transform: scale(1);
}

.wrapper .spnb .sp:hover {
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    transform: scale(1.1);
}

.wrapper .spnb .sp img {
    width: 210px;
    height: 220px;

}

.wrapper .spnb .sp .tensp {
    height: 65px;
    color: #000;
    display: block;
    font-family: 'Bitter', serif;
    font-size: 14px;
    line-height: 20px;
    margin: 0 0 4px;
    overflow: hidden;
    transition: all 300ms ease 0s;
}

.wrapper .spnb .sp .gia {
    color: #ff5858;
    margin-right: 11px;
    font-size: 18px;
    line-height: 20px;
    font-weight: 700;
    text-decoration: none;
}


.binhluan {
    background-color: #ffffff;
    width: 1054px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 0 0 7px 7px;
    box-shadow: 0px 14px 25px 0px rgba(0, 0, 0, 0.15);
    margin-bottom: 20px;
}


.binhluan .scm-filter {
    background: #eee;
    padding: 20px 10px;
    font-size: 16px;
}

.binhluan .pull-left {
    font-size: 16px;
    padding-top: 5px;
}

.binhluan .pull-right {
    margin-right: 150px;
}

.binhluan .form-control {
    height: 50px;

}

.binhluan input[type="submit"] {
    background-color: rgb(255, 153, 0);
    color: white;
    cursor: pointer;
    margin-top: 30px;
    font-size: 1.29em;
    transition: background-color 0.5s ease 0s;
    padding: 1px;
}

.binhluan input {
    width: 400px;
    padding: 18px 10px;
}

.binhluan .scm-newest {
    padding-left: 15px;
    color: red;
}

.binhluan .scm-newest .scm-likest:hover {
    cursor: pointer;
    text-decoration: underline;
}

.binhluan .scm-wrap-ava {
    border: 1px solid #d5d5d5;
    margin-top: 4px;
    font-size: 20px;
    border-radius: 4px;
    text-align: center;
    padding: 10px 0 10px 0;
    margin-left: 10px;
    margin-right: -15px;
}

.binhluan .scm-rating-box {
    border: 1px solid #eee;
    padding: 15px;
    margin-bottom: 40px;
}

.binhluan h3 {
    padding: 0;
    margin: 0;
    font-weight: 400;
    font-size: 26px;
}

.binhluan .scm-comment-count .binhluan .scm-rating {
    display: block;
    margin-top: 40px;
}

.binhluan .scm-rating {
    font-size: 30px;
    color: orange;
}

.scm-comment-count {
    font-size: 16px;
    padding-left: 30px;
    padding-top: 5px;
    float: left;
}

.binhluan .row {
    margin-top: 15px;
}

.binhluan .last-child {
    margin-bottom: 25px;
}

.binhluan .scm-textarea-box textarea {
    margin-top: 10px;
}

.binhluan .scm-process-bar {
    width: 100%;
    height: 20px;
    position: relative;
    background: #d4d4d4;
}

.scm-process {
    position: absolute;
    left: 0;
    height: 20px;
    background: orange;
}

.scm-comment {
    margin-top: 10px;
}

.scm-comment-head {
    font-weight: bold;
    font-size: 16px;
}

.scm-comment-body {
    font-size: 14px;
    margin-top: 5px;
}

.scm-comment-addition {
    margin-top: 5px;
}

.scm-comment-time {
    color: #a0a0a0;
}

.scm-comment-action>a {
    margin-left: 15px;
}
.product-info a{
    height: 14px;
    font-family: 'Raleway', sans-serif;
    color: white;
}
</style>
<?php
        $idloai=$_GET['id'];  
        $spct=getonesp($idloai);
        $spct=$spct['0'];
        extract($spct);
  ?>
<div class="wrapper">
    <div class="product-img">
        <img id="anh" src="public/img/product/imgnb/<?= $img?>" height="350" width="327">
        <!-- <div class="btn_container">
              <button type="button" id="previous" onclick="previous();"> < </button>
              <button type="button" id="next" onclick="next();"> > </button>
          </div> -->

    </div>

    <!-- <script>
                  let khoanh = [];
                  const nanh = 5;
                  let index = 0;
                  for (let i = 0; i < nanh; i++) {
                      khoanh[i] = new Image();
                      khoanh[i].src = `public/img/product/sale/${i}.jpg`;
                  }
                  function previous() {
                      index--;
                      if (index < 0) {
                          index = nanh - 1;
                      }
                      document.getElementById("anh").src = khoanh[index].src;
                  }
                  function next() {
                      index++;
                      if (index >= nanh) {
                          index = 0;
                      }
                      document.getElementById("anh").src = khoanh[index].src;
                  }
                  function first() {
                      index = 0;
                      document.getElementById("anh").src = khoanh[index].src;
                  }
                  function last() {
                      index = nanh - 1;
                      document.getElementById("anh").src = khoanh[index].src;
                  }
              </script> -->
    <div class="product-info">
        <div class="product-text">
            <h1><?= $tensp ?></h1>
            <p><?= $mota ?>
            </p>
        </div>
        <div class="product-price">
            <p><span><?=number_format( $dongia,0,',','.') ?> VNĐ</span></p>
        </div>
        <div class="button">
            <button type="button">Mua Ngay</button>

            
            <button type="button">
                <a href="index.php?act=addcart&idsp=<?=$_GET['id']?>">Thêm Giỏ Hàng</a>
            </button> 
               
            
        </div>
    </div>

    <div class="spnb">
        <h1>Sản Phẩm Nổi Bật</h1>
        <div class="product">
            <?php
                foreach ($spctnb as $sp) {?>
            <div class="sp">
                <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><img src="public/img/product/imgnb/<?= $sp['img']
                       ?>" alt="" /></a>
                <div class="tensp">
                    <p><?= $sp['tensp'] ?></p>
                </div>
                <div class="gia">
                    <span><b><?=number_format( $sp['dongia'],0,',','.') ?> VNĐ</b></span>
                </div>
            </div>
            <?php    }
                 ?>
        </div>
    </div>
</div>

<div class="binhluan">
    <div class="scm-wrap">
        <h3>
            Bình Luận Về Sản Phẩm
        </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="" style="width:1014px;">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                        $(document).ready(function() {
                            $("#binhluan").load("site/view/binhluan/binhluanform.php", {
                                idpro: <?=$idsp?>
                            });
                        });
                        
                        </script>


                    <div id="binhluan">
                    </div>
                </div>

                <?php
                //   foreach ($dsbl as $bl) {
                //     extract($bl);
                //     echo '<div class="row scm-comment">
                //     <div class="col-xs-1">
                //       <div class="scm-wrap-ava">
                //       <i class="fa-regular fa-user"></i>
                //       </div>
                //     </div>
                //     <div class="col-xs-11">
                //       <div class="scm-comment-head">
                //         '.$ten.'
                //       </div>
                //       <div class="scm-comment-body">
                //         '.$noidung.'
                //       </div>
                //       <div class="scm-comment-addition clearfix">
                //         <div class="pull-left scm-comment-time">
                         
                //         </div>
                //         <div class="pull-right scm-comment-action">
                          
                //         </div>
                //       </div>
                //     </div>
                //   </div>';
                //   }
                ?>
                <!-- <div class="row scm-comment">
                <div class="col-xs-1">
                  <div class="scm-wrap-ava">
                    <i class="glyphicon glyphicon-user"></i>
                  </div>
                </div>
                <div class="col-xs-11">
                  <div class="scm-comment-head">
    
                  </div>
                  <div class="scm-comment-body">
                    Mình muốn mua IP7 Plus theo hình thức trả góp use gói FFriends,khi đến mua ngoài CMND ra mình có phải mang theo gì nữa không và cho mình hỏi có FPTShop nào gần khu vực Kang Nam không vậy?
                  </div>
                  <div class="scm-comment-addition clearfix">
                    <div class="pull-left scm-comment-time">
                      4 giờ trước
                    </div>
                    <div class="pull-right scm-comment-action">
                      <a href>Thích</a>
                      <a href>Trả lời</a>
                    </div>
                  </div>
                </div>
              </div> -->



            </div>
            <!-- <div class="col-xs-4">
                <div class="scm-rating-box">
                    <h3>
                        Chi tiết đánh giá
                    </h3>
                    <div class="clearfix">
                        <div class="scm-rating pull-left">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </div>
                        <div class="scm-comment-count">
                            105 đánh giá
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            5 sao
                        </div>
                        <div class="col-xs-7">
                            <div class="scm-process-bar">
                                <div class="scm-process" style="width: 180px;"> </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            60
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2">
                            4 sao
                        </div>
                        <div class="col-xs-7">
                            <div class="scm-process-bar">
                                <div class="scm-process" style="width: 80px;"> </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            15
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2">
                            3 sao
                        </div>
                        <div class="col-xs-7">
                            <div class="scm-process-bar">
                                <div class="scm-process" style="width: 90px;"> </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            18
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2">
                            2 sao
                        </div>
                        <div class="col-xs-7">
                            <div class="scm-process-bar">
                                <div class="scm-process" style="width: 40px;"> </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            12
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2">
                            5 sao
                        </div>
                        <div class="col-xs-7">
                            <div class="scm-process-bar">
                                <div class="scm-process" style="width: 0px;"> </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            0
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>


</div>