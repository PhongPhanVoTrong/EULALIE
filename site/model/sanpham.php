<?php
function themsp($tensp,$img,$gia,$iddm){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('".$tensp."','".$img."','".$gia."','".$iddm."')";
    $conn->exec($sql);
}

function getonesp($idSP){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE idSP=".$idSP);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}



function getall_sp($idloai=0){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    if($idloai>0) $sql.=" AND idloai=".$idloai;
    $sql.=" order by idsp DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_yt($idloai=0){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    if($idloai>0) $sql.=" AND idloai=".$idloai;
    $sql.=" order by soluotxem DESC";
    $sql.=" LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_moi($idloai=0){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    if($idloai>0) $sql.=" AND idloai=".$idloai;
    $sql.=" order by idsp DESC";
    $sql.=" LIMIT 6";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_nb($hot){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    $sql.=" order by hot DESC";
    $sql.=" LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_ct($idloai=0){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    if($idloai>0) $sql.=" AND idloai=".$idloai;
    $sql.=" order by soluotxem DESC";
    $sql.=" LIMIT 4";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

?>