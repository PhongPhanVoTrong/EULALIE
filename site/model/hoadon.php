<?php 


function insert_hoadondathang($idhd,$iduser,$hoten,$sdt,$email,$diachi,$ngaylap,$gcuser){
    $sql="insert into hoadon(idhd,iduser,hoten,sdt,email,
    diachi,ngaylap,gcuser) 
    values('$idhd','$iduser','$hoten','$sdt','$email','$diachi','$ngaylap','$gcuser')";
    pdo_execute($sql);
}

function check_ma_hddh($idhd)
{
    # code...
    $sql="SELECT * FROM `hoadon` WHERE idhd = '$idhd'";
    $result =  pdo_query_one($sql);
   return  $result;


}



function list_hoadonchitiet()
{
    $sql="select * from `chitiethd`";
    $list = pdo_query($sql);
    return $list;
}

function insert_hoadonchitiet($list_hh,$tong_tien,$idhd){
    $sql="insert into chitiethd(list_hh,tong_tien,idhd) 
    values('$list_hh','$tong_tien','$idhd')";
    pdo_execute($sql);
}


function delete_hoadonchitiet($idcthd){
    $sql="delete from chitiethd where idcthd=".$idcthd;
    pdo_execute($sql);
}

