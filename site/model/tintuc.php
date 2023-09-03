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
?>