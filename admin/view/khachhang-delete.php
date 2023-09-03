<?php
require 'khachhang.php';

// Thực hiện xóa
$iduser = isset($_POST['iduser']) ? (int)$_POST['iduser'] : '';
if ($iduser) {
    delete_users($iduser);
}

// Trở về trang danh sách
header("location: admin.php?act=qluser");