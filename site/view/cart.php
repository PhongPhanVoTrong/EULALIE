<!-- <link rel="stylesheet" href="public/css/style.css"> -->
<style>
.cart {
    padding: 100px 0;

}

.cart-top-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

.cart-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0 100px;
}

.cart-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}

.cart-top-cart {
    border: 1px solid #0db7ea;
}

.cart-top-cart i {
    color: #0db7ea;
}

.cart-content-row {
    display: flex;
}

.cart-content-left {
    flex: 2;
    margin-left: 30px;
    padding-right: 12px;
}

.cart-content-left table {
    width: 100%;
    text-align: center;
}

.cart-content-left table th {
    padding: 20px;
    font-family: var(--main-text-font);
    font-size: 12px;
    text-transform: uppercase;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
}

.cart-content-left table p {
    font-size: 12px;
    font-family: var(--main-text-font);
    color: #333;
}

.cart-content-left table input {
    width: 30px;
}

.cart-content-left table span {
    display: block;
    width: 20px;
    height: 20px;
    border: 1px solid #dddddd;
    cursor: pointer;
}

.cart-content-left table td {
    padding: 10px;
    border-bottom: 2px solid #dddddd;
}

.cart-content-left td:first-child img {
    width: 130px;
}

.cart-content-left td:nth-child(2) {
    max-width: 130px;

}

.cart-content-left td:nth-child(3) img {
    width: 30px;
}

.cart-content-right {
    flex: 1;
    padding-right: 80px;
    padding-left: 10px;
    border-left: 2px solid #dddddd;
}

.cart-content-right table {
    width: 100%;
}

.cart-content-right table th {
    padding-bottom: 30px;
    font-size: 20px;
    font-family: var(--main-text-font);
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
    text-align: center;
}

.cart-content-right table td {
    font-family: var(--main-text-font);
    font-size: 12px;
    color: #333;
    padding: 6px 0;
}

.cart-content-right tr:nth-child(4) td {
    border-bottom: 2px solid #dddddd;
}

.cart-content-right tr td:last-child {
    text-align: right;
}

.cart-content-right-text {
    margin: 20px 0;
    text-align: center;
}

.cart-content-right-text p {
    font-family: var(--main-text-font);
    font-size: 12px;
    color: #333;
}

.cart-content-right-button {
    text-align: center;
    align-items: center;
}

.cart-content-right-button button {
    padding: 0 18px;
    height: 35px;
    cursor: pointer;
}

.cart-content-right-button button:first-child {
    background-color: #fff;
    border: 1px solid black;
    margin-right: 20px;
}

.cart-content-right-button button:first-child:hover {
    background-color: #ddd;
}

.cart-content-right-button button:last-child {
    background-color: #fff;
    color: #fff;
    border: none;
    border: 1px solid black;
}

.cart-content-right-button button:last-child:hover {
    background-color: #dddddd;
    color: black;
}

.cart-content-right-dangnhap {
    margin-top: 20px;
}

.cart-content-right-dangnhap p {
    font-family: var(--main-text-font);
    font-size: 12px;
    color: #333;
}

h1 {
    text-align: center;
    font-weight: bold;
    font-size: 50px;
}

.woocommerce button[name="update_cart"],
.woocommerce input[name="update_cart"] {
    display: none;
}
</style>

<section class="cart">
    <h1>GIỎ HÀNG CỦA BẠN</h1>
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart "></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt "></i>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="cart-content-row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <!-- <th>Size</th> -->
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th></th>
                    </tr>
                    <?php
                        // public function addslcart($quantity,$idsp){
                        //     $quantity = mysqli_real_escape_string($this->db->link, $quantity);
                        //     $idsp = mysqli_real_escape_string($this->db->link, $idsp);
                        //     // $query= "UPDATE "
                        // }
                        // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
                        //     $idsp = $_POST['idsp'];
                        //     $quantity = $_POST['quantity'];
                        //     $update_cart= $ct->addslcart($quantity,$idsp);
                        // }
                        // ?>
                    <?php
            $tongsp=0;
            $tong=0;
            $i=0;

            // die(print_r($_SESSION['cart']));
            
            foreach ($_SESSION['cart'] as $sp) { 
                
                extract($sp);
                $ttien=$dongia*$soluong;
                $tong+=$ttien;
                $tongsp++;
                echo '<tr>
                <td>'.($i+1).'</td>
                <td><img src="public/img/product/imgnb/'.$img.'"></td>
                <td>'.$tensp.'</td>
                <td>'.number_format( $dongia,0,',','.').'<sup>₫</sup></td>
                <form action="index.php?act=giohang">
                <input type="hidden" name="action" value="update" id="">
                <input type="hidden" name="idsp" value="'.$id.'"id="">
                <td><input  name="quantity" type="number" style="min-width:50px;" value="'.$soluong.'" min="1">
                
                </form>
                
                <td>'.number_format( $ttien ,0,',','.').'<sup>₫</sup></td>
                <td><a href="index.php?act=delonecart&id='.$i.'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm.706 13.293-1.414 1.414L12 13.415l-3.292 3.292-1.414-1.414 3.292-3.292-3.292-3.292 1.414-1.414L12 10.587l3.292-3.292 1.414 1.414-3.292 3.292 3.292 3.292z"></path></svg></a></td>
                </tr>';
                $i++;
            }
            
        ?>

                </table>
                <a href="index.php?act=delcart">Xóa Tất Cả </a>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM:</td>
                        <td><?=$tongsp;?></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH:</td>
                        <td>
                            <p style="color: red; font-weight: bold;"><?=number_format( $tong,0,',','.') ?><sup>₫</sup>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>PHÍ VẬN CHUYỂN:</td>
                        <td>
                            <p style="font-weight: bold;">FREE</p>
                        </td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>Miễn phí vận chuyển cho đơn hàng trên 500.000<sup>₫</sup></p>
                </div>
                <div class="cart-content-right-button">
                    <button><a href="index.php">TIẾP TỤC MUA SẮM</a></button><br><br>
                    <button><a href="index.php?act=thanhtoan">TIẾP TỤC THANH TOÁN</a></button>
                </div>
                <div class="cart-content-right-dangnhap">
                    <p>TÀI KHOẢN MEMBER</p>
                    <p>Vui lòng <a href="login.php">Đăng Nhập</a> để tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>