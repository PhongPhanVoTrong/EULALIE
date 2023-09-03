<style>
body {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
    background-color: white;

}
.headeradmin {
                background-color: beige;
                border: 1px #ccc solid;
                color: #ff0844;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 1.5vw;
                margin-top: 25px;
                text-align:center;
            }
.row {
    float: left;
    width: 100%;
    margin-left: 0.5px
}


.mb {
    margin-bottom: 30px;
}

.mb1 {
    margin-left: 0.1vw;
}

/* .mr {
        margin-right: 2%;
    } */


.headeradmin {
    background-color: beige;
    border: 1px #ccc solid;
    color: #ff0844;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1.5vw;
    margin-top: 20px;
}


.formcontent {
    padding: 20px 0;
}

.formdslh table {
    width: 100%;
    border-collapse: collapse;
}

/*  */
.formdslh table th:nth-child(1) {
    width: 0%;
    padding: 20px 0px;
    background-color: beige;

}

.formdslh table th:nth-child(2) {
    width: 7%;
    background-color: beige;


}

.formdslh table th:nth-child(3) {
    width: 10%;
    background-color: beige;


}

.formdslh table th:nth-child(4) {
    width: 25%;
    background-color: beige;


}

.formdslh table th:nth-child(5) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(6) {
    width: 10%;
    background-color: beige;


}

.formdslh table th:nth-child(7) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(8) {
    width: 3%;
    background-color: beige;


}

.formdslh table th:nth-child(9) {
    width: 1%;
    background-color: beige;


}







.formdslh table td {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: #ff0844;
}

.formdslh table th {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: #ff0844;
}



.ml {
    float: left;
    width: 45%;
    margin-left: 15px;
}

.mr {
    float: right;
    width: 30%;
}






.formcontent .ml .mb1 input[type="text"] {
    width: 50%;
    border: 1px #ccc solid;
    padding: 4px 10px;
    border-radius: 5px;


}

.formcontent .ml .mb1 input[type="text"]:hover {
    border: 1px rgb(247, 197, 197) solid;
}

.formcontent .mb1 input[type="submit"] {
    width: 7%;
    border: 1px #ccc solid;
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ffff;
}

.formcontent .mb1 input[type="submit"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}

.formcontent .mb1 input[type="button"] {
    width: 7%;
    border: 1px #ccc solid;
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ffff;
}

.formcontent .mb1 input[type="button"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}

.img {
    max-width: 100%;
    object-fit: cover;
    object-position: 8px 0px;
}
</style>



<div class="row">
    <div class="row headeradmin">
        QUẢN LÝ DANH SÁCH TIN TỨC
    </div>

    <form action="admin.php?act=dssanpham" method="post">
        <div class="row formcontent">
            <div class="row formcontent">

                <div class="row mb1 formdslh">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>ID TT</th>
                            <th>Tiêu Đề</th>
                            <th>Nội Dung</th>
                            <th>Hình Ảnh</th>
                            <th>Ngày Đăng</th>
                            <th>Mô Tả</th>
                            <th>Ẩn Hiện</th>
                            <th width="5px; !important">Tính Năng</th>
                        </tr>
                        <script>
                                function xoa() {
                                    return confirm("Bạn có chắc chắn muốn xóa không?");
                                }
                                </script>
                        <?php 
                        $i=1;
                            foreach ($dstintuc as $tintuc) {
                                $tintuc['img']="./public/img/product/tintuc/".$tintuc['hinhanh'];
                                if(is_file( $tintuc['img'])){
                                    $tintuc['hinhanh']="<img src='".$tintuc['img']."'  class='img' > ";                         
                                   }else{
                                    $tintuc['hinhanh']="Không có ảnh";
                                   }
                            echo'        
                            <tr>
                                    <td>'.$i.'</td>   
                                    <td>Id = '.$tintuc['idtintuc'].'</td>
                                    <td>'.$tintuc['tieude'].'</td>
                                    <td>'.$tintuc['noidung'].'</td>           
                                    <td>'.$tintuc['hinhanh'].'</td>           
                                    <td>'.$tintuc['ngaydang'].'</td>           
                                              
                                    <td >'.$tintuc['mota'].' </td>                 
                                    <td>'.$tintuc['anhien'].'</td>           
                                    <td>
                                        <a href="admin.php?act=update_tintuc&idtintuc='.$tintuc['idtintuc'].' "><img src="https://cdn-icons-png.flaticon.com/128/2904/2904805.png" style="width:20px; height:20px;" ></a>
                                        <a onclick="xoa();" href="admin.php?act=del_tintuc&idtintuc='.$tintuc['idtintuc'].' "><img src="https://cdn-icons-png.flaticon.com/128/7476/7476971.png" style="width:20px; height:20px;" ></a>
                                    </td>   
                            </tr>';
                            $i++;
                            }          
                        ?>
                    </table>
                </div>

            </div>
            <div class="row mb1">
                <a href="admin.php?act=add_post"> <input type="button" value="Thêm Mới" name="themmoi" class="btn btn-success waves-effect waves-light"></a>
                <!-- <a href="admin.php?act=dsloai"> <input type="button" value="Danh Sách" ></a>  -->
            </div>
    </form>


</div>

</body>

</html>


<!-- =========================================== -->