<?php



function getall_loai(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loai");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getone_loai($idloai,$tenloai){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loai WHERE  tenloai='".$tenloai."' AND idloai=".$idloai);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}



function get_loai($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loai WHERE idloai = '$id'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch();
    return $kq;
}



?>