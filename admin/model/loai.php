<?php


function getall_loai(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loai");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
} 

function getone_loai($idloai){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loai WHERE idloai=".$idloai);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}




function them_loai($tenloai){
    $conn=connectdb();
    $sql = "INSERT INTO loai (tenloai) VALUES ('".$tenloai."'  )";
    $conn->exec($sql);
}

function del_loai($idloai){
    $conn=connectdb();
    $sql = "DELETE FROM loai WHERE idloai=".$idloai;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function update_loai($idloai,$tenloai){
    $conn=connectdb();
    $sql = "UPDATE loai SET  tenloai=' ".$tenloai." ' WHERE idloai=".$idloai;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}



?>