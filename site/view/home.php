<style>
.new-product .single-product-item .product-image img {
    width: 100%;
    height: 263px;
}

.feartured-carousel .item .single-product-item .product-image img {
    width: 100%;
    height: 204px;
}

.bestseller-carousel .item .single-product-item .product-image img {
    width: 100%;
    height: 204px;
}

.product-info a {
    height: 40px;
}

.overlay-content ul li a i input {
    width: 70px;
    height: 80px;
    margin-left: -20px;
    margin-top: -40px;
    opacity: 0;
}
</style>
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <!-- MAIN-SLIDER-AREA START -->
            <div class="main-slider-area">
                <!-- SLIDER-AREA START -->
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="slider-area">
                        <div id="wrapper">
                            <div class="slider-wrapper">
                                <div id="mainSlider" class="nivoSlider">
                                    <img src="public/img/slider/nuoc hoa nam.jpg" alt="main slider"
                                        title="#htmlcaption" />
                                    <img src="public/img/slider/BANNER NƯỚC HOA NỮ.jpg" alt="main slider"
                                        title="#htmlcaption2" />
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                                    <div class="slider-progress"></div>
                                    <div class="slider-cap-text slider-text1">
                                        <div class="d-table-cell">
                                            <h2 class="animated bounceInDown">EULALIE</h2>
                                            <p class="animated bounceInUp">Nước thơm mang đến mùi hương thơm cho mọi
                                                người, mọi nhà, khi sử dụng sản phẩm bên EULALIE.</p>
                                            <a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s"
                                                href="#">Xem thêm <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                                    <div class="slider-progress"></div>
                                    <div class="slider-cap-text slider-text2">
                                        <div class="d-table-cell">
                                            <h2 class="animated bounceInDown">EULALIE</h2>
                                            <p class="animated bounceInUp">Nước thơm mang đến mùi hương thơm cho mọi
                                                người, mọi nhà, khi sử dụng sản phẩm bên EULALIE.</p>
                                            <a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s"
                                                href="#">Xem thêm <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER-AREA END -->
                <!-- SLIDER-RIGHT START -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="slider-right zoom-img m-top">
                        <a href="#"><img class="img-responsive" src="public/img/product/banner phải.png"
                                alt="sidebar left" /></a>
                    </div>
                </div>
                <!-- SLIDER-RIGHT END -->
            </div>
            <!-- MAIN-SLIDER-AREA END -->
        </div>
        <!-- TOW-COLUMN-PRODUCT START -->
        <div class="row tow-column-product">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- NEW-PRODUCT-AREA START -->
                <div class="new-product-area">
                    <div class="left-title-area">
                        <h2 class="left-title">Sản phẩm hot</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <!-- NEW-PRO-CAROUSEL START -->
                                <div class="new-pro-carousel">
                                    <!-- NEW-PRODUCT-SINGLE-ITEM START -->
                                    <?php foreach ($spnb as $sp) { ?>
                                    <div class="item">
                                        <form action="index.php?act=addcart" method="post">
                                            <div class="new-product">
                                                <div class="single-product-item">
                                                    <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>">
                                                        <div class="product-image">
                                                            <img src="public/img/product/imgnb/<?= $sp['img'] ?>"
                                                                alt="product-image" />
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-search"></i></a></li>
                                                                    <li><a href="index.php?act=addcart&idsp=<?=$sp['']?>"
                                                                            title="Quick view"><i
                                                                                class="fa fa-shopping-cart"><input
                                                                                    type="submit" name="dathang"
                                                                                    id="dathang" hieght="1000px"
                                                                                    margin-bottom="20px"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>

                                                                <div class="review-box">
                                                                    <span><?= $sp['soluotxem'] ?></span>
                                                                </div>

                                                            </div>
                                                            <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>">
                                                                <?= $sp['tensp'] ?>
                                                            </a>
                                                            <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>">
                                                                <div class="price-box">
                                                                    <span
                                                                        class="price"><?=number_format( $sp['dongia'] ,0,',','.') ?>
                                                                        VNĐ</span>
                                                                </div>
                                                            </a>
                                                            <div></div>
                                                            <input type="hidden" name="idsp" value="<?= $sp['idsp'] ?>">
                                                            <input type="hidden" name="img" value="<?= $sp['img'] ?>">
                                                            <input type="hidden" name="tensp"
                                                                value="<?= $sp['tensp'] ?>">
                                                            <input type="hidden" name="dongia"
                                                                value="<?= $sp['dongia'] ?>">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <?php } ?>
                                </div>
                                <!-- NEW-PRO-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NEW-PRODUCT-AREA END -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- SALE-PRODUCTS START -->
                <div class="Sale-Products">
                    <div class="left-title-area">
                        <h2 class="left-title">Sản phẩm mới</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <!-- SALE-CAROUSEL START -->
                                <div class="sale-carousel">
                                    <!-- SALE-PRODUCTS-SINGLE-ITEM START -->
                                    <?php foreach ($spmoi as $sp) { ?>
                                    <div class="item">
                                        <div class="new-product">
                                            <form action="index.php?act=addcart" method="post">
                                                <div class="single-product-item">
                                                    <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>">
                                                        <div class="product-image">
                                                            <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><img
                                                                    src="public/img/product/imgnb/<?= $sp['img'] ?>"
                                                                    alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-shopping-cart"><input
                                                                                    type="submit" name="dathang"
                                                                                    id="dathang" hieght="1000px"
                                                                                    margin-bottom="20px"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i
                                                                                class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span><?= $sp['soluotxem'] ?></span>
                                                                </div>
                                                            </div>
                                                            <a
                                                                href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><?= $sp['tensp'] ?></a>
                                                            <div class="price-box">
                                                                <span
                                                                    class="price"><?=number_format( $sp['dongia'] ,0,',','.') ?>
                                                                    VNĐ</span>
                                                            </div>
                                                            <input type="hidden" name="idsp" value="<?= $sp['idsp'] ?>">
                                                            <input type="hidden" name="img" value="<?= $sp['img'] ?>">
                                                            <input type="hidden" name="tensp"
                                                                value="<?= $sp['tensp'] ?>">
                                                            <input type="hidden" name="dongia"
                                                                value="<?= $sp['dongia'] ?>">
                                                        </div>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <?php } ?>


                                    <!-- SALE-PRODUCTS-SINGLE-ITEM END -->
                                </div>
                                <!-- SALE-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SALE-PRODUCTS END -->
            </div>
        </div>
        <!-- TOW-COLUMN-PRODUCT END -->
        <div class="row">
            <!-- ADD-TWO-BY-ONE-COLUMN START -->
            <div class="add-two-by-one-column">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="tow-column-add zoom-img">
                        <a href="#"><img src="public/img/product/shope-add1.jpg" alt="shope-add" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="one-column-add zoom-img">
                        <a href="#"><img src="public/img/product/shope-add2.jpg" alt="shope-add" /></a>
                    </div>
                </div>
            </div>
            <!-- ADD-TWO-BY-ONE-COLUMN END -->
        </div>
        <div class="row">
            <!-- FEATURED-PRODUCTS-AREA START -->
            <div class="featured-products-area">
                <div class="center-title-area">
                    <h2 class="center-title">SẢN PHẨM YÊU THÍCH</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- FEARTURED-CAROUSEL START -->
                        <div class="feartured-carousel">
                            <!-- SINGLE-PRODUCT-ITEM START -->
                            <?php foreach ($spyt as $sp) { ?>
                            <div class="item">
                                <form action="index.php?act=addcart" method="post">
                                    <div class="new-product">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><img
                                                        src="public/img/product/imgnb/<?= $sp['img'] ?>"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart">

                                                                    <input type="submit" name="dathang" id="dathang"
                                                                        hieght="1000px" margin-bottom="20px"></i></a>
                                                        </li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span><?= $sp['soluotxem'] ?></span>
                                                    </div>
                                                </div>
                                                <a
                                                    href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><?= $sp['tensp'] ?></a>
                                                <div class="price-box">
                                                    <span class="price"><?=number_format( $sp['dongia'] ,0,',','.') ?>
                                                        VNĐ</span>
                                                </div>
                                                <input type="hidden" name="idsp" value="<?= $sp['idsp'] ?>">
                                                <input type="hidden" name="img" value="<?= $sp['img'] ?>">
                                                <input type="hidden" name="tensp" value="<?= $sp['tensp'] ?>">
                                                <input type="hidden" name="dongia" value="<?= $sp['dongia'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <?php } ?>
                            <!-- SINGLE-PRODUCT-ITEM END -->
                            <!-- SINGLE-PRODUCT-ITEM START -->

                            <!-- SINGLE-PRODUCT-ITEM END -->
                            <!-- SINGLE-PRODUCT-ITEM START -->
                        </div>
                        <!-- FEARTURED-CAROUSEL END -->
                    </div>
                </div>
            </div>
            <!-- FEATURED-PRODUCTS-AREA END -->
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- TAB-BG-PRODUCT-AREA START -->

                <!-- TAB-BG-PRODUCT-AREA END -->
            </div>
        </div>
        <div class="row">
            <!-- BESTSELLER-PRODUCTS-AREA START -->
            <div class="bestseller-products-area">
                <div class="center-title-area">
                    <h2 class="center-title">SẢN PHẨM BÁN CHẠY</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- BESTSELLER-CAROUSEL START -->
                        <div class="bestseller-carousel">
                            <!-- BESTSELLER-SINGLE-ITEM START -->
                            <?php foreach ($spnb as $sp) { ?>
                            <div class="item">
                                <form action="index.php?act=addcart" method="post">
                                    <div class="new-product">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="index.php?act=chitiet&id=<?= $sp['idsp'] ?>"><img
                                                        src="public/img/product/imgnb/<?= $sp['img'] ?>"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"><input type="submit"
                                                                        name="dathang" id="dathang" hieght="1000px"
                                                                        margin-bottom="20px"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span><?= $sp['soluotxem'] ?></span>
                                                    </div>
                                                </div>
                                                <a href="#"><?= $sp['tensp'] ?></a>
                                                <div class="price-box">
                                                    <span class="price"><?=number_format( $sp['dongia'] ,0,',','.') ?>
                                                        VNĐ</span>
                                                </div>
                                                <input type="hidden" name="idsp" value="<?= $sp['idsp'] ?>">
                                                <input type="hidden" name="img" value="<?= $sp['img'] ?>">
                                                <input type="hidden" name="tensp" value="<?= $sp['tensp'] ?>">
                                                <input type="hidden" name="dongia" value="<?= $sp['dongia'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <?php } ?>
                            <!-- BESTSELLER-SINGLE-ITEM END -->
                            <!-- BESTSELLER-SINGLE-ITEM START -->

                            <!-- BESTSELLER-SINGLE-ITEM END -->
                        </div>
                        <!-- BESTSELLER-CAROUSEL END -->
                    </div>
                </div>
            </div>
            <!-- BESTSELLER-PRODUCTS-AREA END -->
        </div>
        <div class="row">
            <!-- IMAGE-ADD-AREA START -->
            <div class="image-add-area">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- ONEHALF-ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="public/img/product/one-helf1.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- ONEHALF-ADD END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- ONEHALF-ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="public/img/product/one-helf2.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- ONEHALF-ADD END -->
                </div>
            </div>
            <!-- IMAGE-ADD-AREA END -->
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="latest-news-row">
                <div class="center-title-area">
                    <h2 class="center-title"><a href="#">TIN TỨC MỚI VỀ NƯỚC HOA</a></h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- LATEST-NEWS-CAROUSEL START -->
                        <div class="latest-news-carousel">
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <?php foreach($dstintuc as $tintuc) { ?>
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img class="img"
                                                src="public/img/product/tintuc/<?= $tintuc['hinhanh'] ?>"
                                                alt="latest-post" /></a>
                                        <h2><a href="#"><?= $tintuc['tieude'] ?></a></h2>
                                        <p><?= $tintuc['mota']?></p>
                                        <div class="latest-post-info">
                                            <i
                                                class="fa fa-calendar"></i><span><?=date( 'd/m/Y',strtotime( $tintuc['ngaydang']))?></span>


                                        </div>
                                        <div class="read-more">
                                            <a href="#">Xem thêm... <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <!-- LATEST-NEWS-SINGLE-POST END -->


                        </div>
                        <!-- LATEST-NEWS-CAROUSEL START -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST-NEWS-AREA END -->
<!-- BRAND-CLIENT-AREA START -->
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
                                        <img src="public/img/brand/channel.png" width="200px" alt="brand-client" />
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
                                        <img src="public/img/brand/dior.jpg" alt="brand-client" />
                                    </a>
                                </div>
                            </div>



                            <div class="item">
                                <div class="single-client">
                                    <a href="#">
                                        <img src="public/img/brand/versace.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
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
<!-- BRAND-CLIENT-AREA END -->
<!-- COMPANY-FACALITY START -->
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