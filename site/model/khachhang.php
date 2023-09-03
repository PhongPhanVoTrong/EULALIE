<?php



function thembl($idpro,$makh,$noidung,$ngaybinhluan){
    $conn=connectdb();
    $sql = "INSERT INTO binhluan (masp,makh,noidung,ngay_binhluan)
    values('$idpro','$makh','$noidung','$ngaybinhluan') ";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_bl(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM binhluan");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_bl_sp($masp){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT binhluan.*,user.hoten INNER join user on user.iduser = binhluan.mabl  FROM binhluan WHERE masp=".$masp);
    $stmt = $conn->prepare("select binhluan.* , user.hoten from binhluan inner join user on user.iduser = binhluan.makh WHERE masp=".$masp);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}


function delbl($mabl){
    $conn=connectdb();
    $sql = "DELETE FROM binhluan WHERE mabl=".$mabl;

    // use exec() because no results are returned
    $conn->exec($sql);
}


function get_time()
    {
        return date('d-m-Y');
    }
?>