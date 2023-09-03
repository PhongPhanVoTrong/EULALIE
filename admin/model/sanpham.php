<?php


function getall_sp(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getone_sp($idsp){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE idsp=".$idsp);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}


function them_sp($idloai,$tensp,$img,$gia,$slx,$tt,$role){
    $conn=connectdb();
    $sql = "INSERT INTO sanpham (idloai,tensp,img,dongia,soluotxem,mota,anhien) VALUES ('$idloai', '$tensp'  , '$img'  , '$gia' , '$slx' , '$tt' , '$role'  )";
    $conn->exec($sql);
}


function del_sp($idsp){
    $conn=connectdb();
    $sql = "DELETE FROM sanpham WHERE idsp=".$idsp;
    // use exec() because no results are return ned
    $conn->exec($sql);
}

function update_sp($idsp,$tensp,$idloai,$img,$gia,$slx,$mt,$role){
    $conn=connectdb();
    if($img==""){
        $sql = "UPDATE sanpham SET  tensp='".$tensp."' , idloai='".$idloai."' , dongia='".$gia."' , soluotxem='".$slx."'  , mota='".$mt."' , anhien='".$role."' WHERE idsp=".$idsp;
    }else{
        $sql = "UPDATE sanpham SET  tensp='".$tensp."' , idloai='".$idloai."' , img='".$img."' , dongia='".$gia."' , soluotxem='".$slx."'  , mota='".$mt."' , anhien='".$role."' WHERE idsp=".$idsp;
    }   
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

?>