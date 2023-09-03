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
function getall_bl_byid($mabl){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM binhluan where masp=".$mabl);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function delbl($mabl){
    $conn=connectdb();
    $sql = "DELETE  FROM binhluan WHERE mabl=".$mabl;
    $conn->exec($sql);
}

?>