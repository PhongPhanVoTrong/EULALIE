<?php
session_start();
include "../../model/connectdb.php";
include "../../model/khachhang.php";
$idpro = $_REQUEST['idpro'];
$dsbl = getall_bl_sp($idpro);

// die(print_r($_SESSION['iduser']));
// var_dump(($_SESSION['iduser']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <style>
    .binhluan input[text] {
        width: 600px
    }
    </style>
</head>

<body>

    <!-- <h1>ĐÁNH GIÁ SẢN PHẨM</h1> -->
    <!-- <div class="divpadding"> -->
    <div class="danhsachbinhluan">
        <!-- <table>    
                    <tr>
                        <th>Tên người bình luận</th>
                        <th>Nội dung bình luận</th>
                        <th>Ngày bình luận</th>
                    </tr>
                    <?php
                    $dem = 0;
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $ngay_binhluan = get_time();
                        echo '<tr>
                                    <td>' . $hoten . '</td>
                                    <td>' . $noidung . '</td>
                                    <td>' . $ngay_binhluan . '</td>
                                </tr>';
                        $dem++;
                    }
                    ?>
                </table> -->
    </div>
    <?php
    if (isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])) { ?>
    <div class="box-guibinhluan" style="width:100%;">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="binhluanform" style="text-align:left;">
            <input type="hidden" name="idpro" value="<?= $idpro ?>">
            <input type="text" name="noidungbinhluan" id="" class="noidungbinhluan" placeholder="Gửi bình luận">
            <br>
            <input type="submit" class="guibinhluan" name="guibinhluan" id="" value="Gửi">
        </form>
    </div>
    <!-- </div> -->
    <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidungbinhluan'];
            $idpro = $_POST['idpro'];
            $makh = $_SESSION['iduser'];
            $ngaybinhluan =  get_time();
            thembl($idpro, $makh, $noidung, $ngaybinhluan);
            header("location:" . $_SERVER['HTTP_REFERER']);
            // header("location:".$_SERVER['HTTP_HOST']);
            // echo'$_SERVER['HTTP_HOST']';
        }
        ?>
    <table>
        <tr>
            <th>Tên người bình luận</th>
            <th>Nội dung bình luận</th>
            <th>Ngày bình luận</th>
        </tr>
        <?php
            $dem = 0;
            foreach ($dsbl as $bl) {
                extract($bl);
                $ngay_binhluan = get_time();
                echo '<tr>
                                    <td>' . $hoten . '</td>
                                    <td>' . $noidung . '</td>
                                    <td>' . $ngay_binhluan . '</td>
                                </tr>';
                $dem++;
            }
            ?>
    </table>
    <?php } else { ?>
    <div class="" style=" width:100%;">
        <div style="text-align:center">
            <a href="login.php" class="btn btn-primary">Đăng nhập để bình luận!!</a>
        </div>
    </div>
    <?php } ?>















</body>

</html>