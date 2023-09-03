<?php
$con = mysqli_connect("localhost", "root", "", "eulalie");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Change character set to utf8
mysqli_set_charset($con, "utf8");
?>
<?php
if (isset($_POST['capnhatdonhang'])) {
    $xuly = $_POST['xuly']; // 0 1
    $idhd = $_POST['mahang_xuly']; // idhd
    $sql_update_donhang = mysqli_query($con, "UPDATE hoadon SET trangthai=$xuly WHERE idhd=$idhd");
    // note
}

if (isset($_GET['xoadonhang'])) {
    $idhd = $_GET['xoadonhang'];
    $sql_delete = mysqli_query($con, "DELETE FROM hoadon WHERE idhd='$idhd'");
    header('Location:admin.php?act=qldonhang');
}
// if (isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])) {
//     $huydon = $_GET['xacnhanhuy'];
//     $magiaodich = $_GET['mahang'];
// } else {
//     $huydon = '';
//     $magiaodich = '';
// }
// $sql_update_donhang = mysqli_query($con, "UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
// $sql_update_giaodich = mysqli_query($con, "UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đơn hàng</title>
    <link href="../../public/css/csslayout/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <br><br>
    <h1>Xử lý đơn hàng</h1>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <?php
            if (isset($_GET['quanly']) == 'xemdonhang') {
                $idhd = $_GET['idhd'];
                echo "<p>$idhd</p>";
                $sql_chitiet = mysqli_query($con, "SELECT * FROM `chitiethd`,`sanpham` WHERE `chitiethd`.`idsp`=`sanpham`.`idsp` AND `chitiethd`.`idhd`='$idhd'");
                // SELECT * FROM `chitiethd`,`sanpham` WHERE `chitiethd`.`idhd`=85418507 AND `chitiethd`.`idsp`=`sanpham`.`idsp`;
            ?>
            <div class="col-md-7">
                <p>Xem chi tiết đơn hàng</p>
                <form action="" method="POST">
                    <table class="table table-bordered ">
                        <tr>
                            <th>Thứ tự</th>
                            <th>ID Chi tiết hóa đơn</th>
                            <th>ID Sản phẩm</th>
                            <th>ID Hóa đơn</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>


                            <!-- <th>Quản lý</th> -->
                        </tr>
                        <?php
                            $i = 0;
                            while ($row_donhang = mysqli_fetch_array($sql_chitiet)) {
                                $i++;
                            ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_donhang['idcthd']; ?></td>
                            <td><?php echo $row_donhang['idsp']; ?></td>
                            <td><?php echo $row_donhang['idhd']; ?></td>
                            <td><?php echo $row_donhang['tensp']; ?></td>
                            <td><?php echo $row_donhang['soluong']; ?></td>
                            <td><?php echo $row_donhang['tong_tien']; ?></td>
                            <td><?php echo number_format($row_donhang['soluong'] * $row_donhang['tong_tien']) . 'vnđ'; ?>
                            </td>
                            <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['idhd'] ?>">

                            <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
                        </tr>
                        <?php
                            }
                            ?>
                    </table>

                    <select class="form-control" name="xuly">
                        <option value="1">Đã xử lý | Giao hàng</option>
                        <option value="0">Chưa xử lý</option>
                    </select><br>

                    <input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
                </form>
            </div>
            <?php
            } else {
            ?>

            <div class="col-md-7">
                <p>Đơn hàng</p>
            </div>
            <?php
            }

            ?>
            <div class="col-md-5">
                <h4>Liệt kê đơn hàng</h4>
                <?php
                $sql_select = mysqli_query($con, "SELECT * FROM hoadon");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>ID Hóa đơn</th>
                        <th>ID User</th>
                        <th>Họ tên khách hàng</th>
                        <th>SDT</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ngày lập</th>
                        <th>Tình trạng đơn hàng</th>
                        <th>Ghi chú Admin</th>
                        <th>Ghi chú User</th>
                        <!-- <th>Hủy đơn</th> -->
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_donhang = mysqli_fetch_array($sql_select)) {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>

                        <td><?php echo $row_donhang['idhd']; ?></td>
                        <td><?php echo $row_donhang['iduser']; ?></td>
                        <td><?php echo $row_donhang['hoten']; ?></td>
                        <td><?php echo $row_donhang['sdt']; ?></td>
                        <td><?php echo $row_donhang['email']; ?></td>
                        <td><?php echo $row_donhang['diachi']; ?></td>
                        <td><?php echo $row_donhang['ngaylap'] ?></td>
                        <td><?php
                                if ($row_donhang['trangthai'] == 0) {
                                    echo 'Chưa xử lý';
                                } else {
                                    echo 'Đã xử lý';
                                }
                                ?></td>
                        <td><?php echo $row_donhang['gcadmin'] ?></td>
                        <td><?php echo $row_donhang['gcuser'] ?></td>



                        <!-- <td> -->
                        <?php
                            // if ($row_donhang['huydon'] == 0) {
                            //         } elseif ($row_donhang['huydon'] == 1) {
                            //             echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang=' . $row_donhang['mahang'] . '&xacnhanhuy=2">Xác nhận hủy đơn</a>';
                            //         } else {
                            //             echo 'Đã hủy';
                            //         }
                            ?>
                        <!-- </td> -->

                        <td><a href="admin.php?act=qldonhang&xoadonhang=<?php echo $row_donhang['idhd'] ?>">Xóa</a> ||
                            <a href="admin.php?act=qldonhang&quanly=xemdonhang&idhd=<?php echo $row_donhang['idhd'] ?>">Xem
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>