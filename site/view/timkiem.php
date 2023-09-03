<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
$conn = mysqli_connect('localhost', 'root', '', 'eulalie') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM sanpham WHERE tensp LIKE '%" . $tukhoa . "%'";
$query = mysqli_query($conn, $sql);
?>
<style>
.nuochoa {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin-bottom: 50px;
}

.nuochoa .col-lg-9 {
    width: 100%;
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <h3>Sản phẩm cần tìm: <?php echo $_POST['tukhoa']; ?></h3>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="nuochoa">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="all-gategory-product">
                    <div class="row">
                        <ul class="gategory-product">
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-product-item">
                                    <form action="index.php?act=addcart" method="post">
                                        <div class="product-image">
                                            <a href="index.php?act=chitiet&id=<?= $row['idsp'] ?>"><img
                                                    src="public/img/product/imgnb/<?= $row['img'] ?>"
                                                    alt="product-image" /></a>

                                            <a href="single-product.html" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"><input type="submit"
                                                                    name="dathang" id="dathang" hieght="1000px"
                                                                    margin-bottom="20px"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span><?= $row['soluotxem'] ?></span>
                                                </div>
                                            </div>
                                            <a href="single-product.html"><?= $row['tensp'] ?></a>
                                            <div class="price-box">
                                                <span class="price"><?= number_format($row['dongia'], 0, ',', '.') ?>
                                                    VNĐ</span>
                                            </div>
                                            <input type="hidden" name="idsp" value="<?= $row['idsp'] ?>">
                                            <input type="hidden" name="img" value="<?= $row['img'] ?>">
                                            <input type="hidden" name="tensp" value="<?= $row['tensp'] ?>">
                                            <input type="hidden" name="dongia" value="<?= $row['dongia'] ?>">
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>