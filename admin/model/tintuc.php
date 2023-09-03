<?php
    function getall_tintuc(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tintuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    function them_tintuc($tieude,$noidung,$ngaydang,$img,$mota,$role){
        $conn=connectdb();
        $sql = "INSERT INTO tintuc (tieude,noidung,ngaydang,hinhanh,mota,anhien) VALUES ('$tieude' , '$noidung'  , '$ngaydang' , '$img' , '$mota' , '$role'  )";
        $conn->exec($sql);
    }
    function getone_tintuc($idtintuc){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tintuc WHERE idtintuc=".$idtintuc);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    
function del_tintuc($idtintuc){
    $conn=connectdb();
    $sql = "DELETE FROM tintuc WHERE idtintuc=".$idtintuc;
    // use exec() because no results are return ned
    $conn->exec($sql);
}

function update_tintuc($idtintuc,$tieude,$noidung,$ngaydang,$hinhanh,$mota,$anhien){
    $conn=connectdb();
    if($hinhanh==""){
        $sql = "UPDATE tintuc SET  tieude='".$tieude."' , noidung='".$noidung."' , ngaydang='".$ngaydang."' , mota='".$mota."'  , anhien='".$anhien."'  WHERE idtintuc=".$idtintuc;
    }else{
        $sql = "UPDATE tintuc SET  tieude='".$tieude."' , noidung='".$noidung."' , ngaydang='".$ngaydang."', hinhanh='".$hinhanh."'  , mota='".$mota."' , anhien='".$anhien."'  WHERE idtintuc=".$idtintuc;
    }   
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
    
?>