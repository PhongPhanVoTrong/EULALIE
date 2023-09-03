<?php
session_start();
ob_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

include "site/model/connectdb.php";
include "site/model/pdo.php";
include "site/model/global.php";
include "site/model/sanpham.php";
include "site/model/loai.php";
$dsloai = getall_loai();

//set title
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'nuochoanam':
            $page_title = 'Nước hoa nam';
            break;

        case 'nuochoanu':
            $page_title = 'Nước hoa nữ';
            break;
    }
}

include "site/view/header.php";
include "site/model/tintuc.php";
include "admin/model/user.php";
include "admin/model/binhluan.php";
include "site/model/hoadon.php";

$spnb = getall_nb(1);
$spyt = getall_yt();
$spmoi = getall_moi();
$spnam = getall_sp(13, "");
$spnu = getall_sp(14, "");
$dsbc = getall_sp();
$spctnb = getall_ct();
$dstintuc = getall_tintuc(4, "");
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'addcart':
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_GET['idsp'])) {


                $idsp = $_GET['idsp'];
                $spct = getonesp($idsp);
                $spct = $spct['0'];
                extract($spct);
                $soluong = 1;
                $found = false;
                $i = 0;
                if (isset($_SESSION['cart']) && (count($_SESSION['cart'])) > 0) {
                    foreach ($_SESSION['cart'] as $item) {
                        if ($item['id'] == $idsp) {
                            $soluong += $item['soluong'];
                            $found = true;
                            $_SESSION['cart'][$i]['soluong'] = $soluong;
                            break;
                        }
                        $i++;
                    }
                }
                if (!$found) {
                    $new_product = [
                        'id' => $idsp,
                        'img' => $img,
                        'tensp' => $tensp,
                        'dongia' => $dongia,
                        'soluong' =>
                        $soluong,
                        'mota' => $mota
                    ];
                    array_push($_SESSION['cart'], $new_product);
                }
            }

            header('location: index.php?act=giohang');
            break;
        case 'delcart':
            if (isset($_SESSION['cart']))
                unset($_SESSION['cart']);
            header('location: index.php');

            // include "site/view/cart.php";
            break;
        case 'delonecart':
            if (isset($_SESSION['cart'])) {
                if (isset($_GET['id'])) {
                    array_splice($_SESSION['cart'], $_GET['id'], 1);
                } else {
                    unset($_SESSION['cart']);
                }
            }

            if (count($_SESSION['cart']) > 0) {
                header('location: index.php?act=giohang');
            } else {
                header('location: index.php');
            }
            break;
        case 'giohang':
            $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
            $sl = (isset($_GET['sl'])) ? $_GET['sl'] : 1;
            if ($action == 'update') {
                $_SESSION['cart'][$idsp]['sl'] = $sl;
            }
            include "site/view/cart.php";
            break;
        case 'chitiet':
            $masp = $_GET['id'];
            $dsbl = getall_bl_byid($masp);
            include "site/view/chitiet.php";
            break;

        case 'addbl':
            // nhận dữ liệu và xử lý
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $idsp = $_POST['idsp'];
                $ten = $_POST['ten'];
                $noidung = $_POST['noidung'];
                thembl($idsp, $ten, $noidung);
                $masp = $_GET['id'];
                $dsbl = getall_bl_byid($idsp);
            }
            include "site/view/chitiet.php";
            break;

        case 'nuochoa':

            $idloai = isset($_GET['idloai']) ? $_GET['idloai'] : '';
            $dssp = getall_sp($idloai);


            $tenLoai = isset(get_loai($idloai)['tenloai']) ? get_loai($idloai)['tenloai'] : 'Nước hoa';



            include "site/view/nuochoa.php";
            break;
            // case 'nuochoanam':

            //     $idloai= isset($_GET['idloai']) ? $_GET['idloai'] : '' ;
            //     $dssp = getall_sp($idloai, "");
            //     include "site/view/nuochoanam.php";
            //     break;
            // case 'nuochoanu':
            //     $allsp = getall_sp();
            //     include "site/view/nuochoanu.php";
            //     break;
        case 'lienhe':
            include "site/view/lienhe.php";
            break;
        case 'thanhtoan':
            if (isset($_POST['dat_hang'])) {
                if (!isset($_SESSION['iduser']) || empty($_SESSION['iduser'])) {
                    die('<script>
               
                    let is_confirm =  confirm("Vui lòng đăng nhập để tiếp tục mua hàng!")

                    if(is_confirm){

                        window.location.href = "login.php"

                    }

                    </script>');
                }

                if (!empty($_SESSION['cart'])) {
                    $idhd = rand();
                    $iduser = $_SESSION['iduser'];
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];
                    $ghichu = $_POST['ghichu'];
                    $ngaylap = get_time();


                    if (!empty($hoten) && !empty($email) && !empty($sdt) && !empty($diachi) && !empty($ghichu)) {

                        insert_hoadondathang($idhd, $iduser, $hoten, $sdt, $email, $diachi, $ngaylap, $ghichu);

                        $tong_tien = 0;
                        $list_hh = [];
                        foreach ($_SESSION['cart'] as $item) {

                            extract($item);
                            $tong_tien += $dongia * $soluong;
                            array_push($list_hh, [
                                'id' => $id,
                                'img' => $img,
                                'tensp' => $tensp,
                                'dongia' => $dongia,
                                'soluong' => $soluong,
                                'tongtien' =>
                                $dongia * $soluong
                            ]);
                        }

                        insert_hoadonchitiet(json_encode($list_hh), $tong_tien, $idhd);

                        echo '<script>
                        alert("Đặt hàng thành công");
                        </script>';
                        $_SESSION['cart'] = [];
                    } else {
                        $thongbao = 'Vui lòng điền đầy đủ các thông tin đặt hàng!';
                        // echo '<script>
                        // alert("Vui lòng điền đầy đủ các thông tin đặt hàng!");
                        // </script>';
                    }
                } else {

                    echo '<script>
                                alert("Giỏ hàng đang trống");
                                </script>';
                }
            }



            include "site/view/thanhtoan.php";
            break;
        case 'timkiem':
            include "site/view/timkiem.php";
            break;
    }
} else {
    include "site/view/home.php";
}
include "site/view/footer.php";
