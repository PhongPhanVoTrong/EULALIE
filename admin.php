<?php
session_start();
ob_start();
include "admin/model/connectdb.php";
include "site/model/pdo.php";
include "admin/model/loai.php";
include "admin/model/sanpham.php";
include "admin/model/tintuc.php";
include "admin/view/header.php";
include "admin/model/binhluan.php";
include "site/model/hoadon.php";
include "admin/model/user.php";




$dsaddloai = getall_loai();
$dsaddsanpham = getall_sp();
$dstintuc = getall_tintuc();
$dsbl = getall_bl();
$dsdh = list_hoadonchitiet();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // quản lý thêm xóa sửa loại
        case 'addloai':
            // nhận dữ liệu và xử lý
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                // $idloai=$_POST['idloai'];
                // $maloai=$_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                them_loai($tenloai);
            }
            // lấy danh sách danh mục
            $dsaddloai = getall_loai();
            include "admin/view/loai.php";
            break;
        case 'del_loai':
            if (isset($_GET['idloai'])) {
                $idloai = $_GET['idloai'];
                del_loai($idloai);
            }
            $dsaddloai = getall_loai();
            include "admin/view/dsloai.php";
            break;
        case 'update_loai':
            //lấy 1 record đúng với id truyền vào
            if (isset($_GET['idloai'])) {
                $idloai = $_GET['idloai'];
                $kq1 = getone_loai($idloai);
                // cần dstt
                $kq = getall_loai();
                include "admin/view/update_loai.php";
            }
            if (isset($_POST['idloai'])) {

                $idloai = $_POST['idloai'];
                $tenloai = $_POST['tenloai'];


                update_loai($idloai, $tenloai);
                // cần dsdm
                $kq = getall_loai();
                include "admin/view/dsloai.php";
            }
            break;
        case 'dsloai':
            include "admin/view/dsloai.php";
            break;
        case 'updateuser':
            require 'admin/view/khachhang.php';

            // Lấy thông tin hiển thị lên để người dùng sửa
            $iduser = isset($_GET['iduser']) ? (int)$_GET['iduser'] : '';
            if ($iduser) {
                $data = get_users($iduser);
            }

            // Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
            if (!$data) {
                header("location: admin/view/khachhang-list.php");
            }

            // Nếu người dùng submit form
            if (!empty($_POST['edit_users'])) {
                // Lay data
                $data['hoten']        = isset($_POST['hoten']) ? $_POST['hoten'] : '';
                $data['sdt']         = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $data['email']    = isset($_POST['email']) ? $_POST['email'] : '';
                $data['diachi']          = isset($_POST['diachi']) ? $_POST['diachi'] : '';

                // Validate thong tin
                $errors = array();
                if (empty($data['hoten'])) {
                    $errors['hoten'] = 'Chưa nhập tên khách hàng';
                }

                if (empty($data['sdt'])) {
                    $errors['sdt'] = 'Chưa nhập SĐT khách hàng';
                }

                if (empty($data['email'])) {
                    $errors['email'] = 'Chưa nhập email khách hàng';
                }

                if (empty($data['diachi'])) {
                    $errors['diachi'] = 'Chưa nhập địa chỉ khách hàng';
                }

                // Neu ko co loi thi insert
                if (!$errors) {
                    edit_users($data['iduser'], $data['hoten'], $data['sdt'], $data['email'], $data['diachi']);
                    // Trở về trang danh sách
                    header("location: admin.php?act=qluser");
                }
            }

            disconnect_db();
            include "admin/view/khachhang-edit.php";
            break;
            // xóa user
        case 'deleteuser':
            include "admin/view/khachhang-delete.php";
            break;

            // quản lý thêm, xóa , sửa sản phẩm
        case 'addsanpham':
            // nhận dữ liệu và xử lý
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $idloai = $_POST['idloai'];
                $gia = $_POST['gia'];
                $slx = $_POST['slx'];
                $tt = $_POST['tt'];
                $role = $_POST['role'];

                $img = $_FILES['img']['name'];
                $target_dir = "public/img/product/imgnb/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                them_sp($idloai, $tensp, $img, $gia, $slx, $tt, $role);
                //  $thongbao="Thêm thành công";
            }
            // lấy danh sách danh mục
            $dsaddloai = getall_loai();
            // $dsaddsanpham=getall_sp();    
            include "admin/view/sanpham.php";
            break;

        case 'del_sp':
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                del_sp($idsp);
            }
            $dsaddsanpham = getall_sp();
            include "admin/view/dssanpham.php";
            break;
        case 'update_sanpham':
            //lấy 1 record đúng với id truyền vào
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                $kq1 = getone_sp($idsp);
                // cần dstt
                $kq = getall_sp();
                include "admin/view/update_sanpham.php";
            }
            if (isset($_POST['idsp'])) {
                $tensp = $_POST['tensp'];
                $idloai = $_POST['idloai'];
                $gia = $_POST['gia'];
                $slx = $_POST['slx'];
                $tt = $_POST['tt'];
                $role = $_POST['role'];
                $idsp = $_POST['idsp'];
                // $idloai=$_POST['idloai']; 

                $img = $_FILES['img']['name'];
                $target_dir = "public/img/product/imgnb/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                update_sp($idsp, $tensp, $idloai, $img, $gia, $slx, $tt, $role);
                // cần dsdm
                $kq = getall_sp();
                include "admin/view/dssanpham.php";
            }
            break;
        case 'dssanpham':
            include "admin/view/dssanpham.php";
            break;
        case 'tintuc':
            include "admin/view/tintuc.php";
            break;
        case 'dstintuc':
            include "admin/view/dstintuc.php";
            break;
        case 'add_post':
            // nhận dữ liệu và xử lý
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $ngaydang = $_POST['ngaydang'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $role = $_POST['role'];
                $target_dir = "public/img/product/tintuc/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                them_tintuc($tieude, $noidung, $ngaydang, $img, $mota, $role);
                //   $thongbao="Thêm thành công";
            }
            $dstintuc = getall_tintuc();
            include "admin/view/tintuc.php";
            break;

        case 'addbl':
            // nhận dữ liệu  
            //          
            include "admin/view/binhluan.php";
            break;
        case 'quanlydonhang':
            // nhận dữ liệu  
            //          
            include "admin/view/quanlydonhang.php";
            break;
        case 'delbl':
            $mabl = $_GET['mabl'];
            delbl($mabl);
            include "admin/view/binhluan.php";
            break;

        case 'trangchu':
            include "admin/view/home.php";
            break;
        case 'qluser':
            include "admin/view/khachhang-list.php";
            break;
        case 'qldonhang':
            include "admin/view/quanlydonhang.php";
            break;
        case 'thoat':
            unset($_SESSION['chucvu']);
            break;
        default:
            include "admin/view/home.php";
            break;
    }
} else {
    include "admin/view/home.php";
}
include "admin/view/footer.php";