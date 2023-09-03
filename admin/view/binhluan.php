<style>
body {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
    background-color: white;

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
    margin-top: 25px;
    text-align: center;
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
    width: 5%;
    padding: 20px 0px;
    background-color: beige;

}

.formdslh table th:nth-child(2) {
    width: 8%;
    background-color: beige;


}

.formdslh table th:nth-child(3) {
    width: 15%;
    background-color: beige;


}

.formdslh table th:nth-child(4) {
    width: 25%;
    background-color: beige;


}

.formdslh table th:nth-child(5) {
    width: 5%;
    background-color: beige;


}

.formdslh table th:nth-child(6) {
    width: 5%;
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
    background-color: rgb(255, 250, 250);
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ff0844;
}

.formcontent .mb1 input[type="submit"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}

.formcontent .mb1 input[type="button"] {
    width: 7%;
    border: 1px #ccc solid;
    background-color: rgb(255, 250, 250);
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ff0844;
}

.formcontent .mb1 input[type="button"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}
</style>


<!-- ============================================= -->

<div class="row">
    <div class="row headeradmin">
        QUẢN LÝ DANH SÁCH BÌNH LUẬN
    </div>
    <form action="admin.php?act=dssanpham" method="post">
        <div class="row formcontent">
            <div class="row formcontent">
                <div class="row mb1 formdslh">
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Mã kh</th>
                            <th>Mã sp</th>
                            <th>Nội Dung Bình Luận</th>
                            <th>Ngày đăng</th>
                            <!-- <th>Trạng Thái</th> -->
                        </tr>
                        <script>
                        function xoa() {
                            return confirm("Bạn có chắc chắn muốn xóa không?");
                        }
                        </script>
                        <?php
                        $i = 1;
                        foreach ($dsbl as $bl) {
                            echo '<tr>
                                        <td>' . $i . '</td>
                                        <td>' . $bl['makh'] . '</td>
                                        <td>' . $bl['masp'] . '</td>
                                        <td>' . $bl['noidung'] . '</td>
                                        <td>' . $bl['ngay_binhluan'] . '</td>
                                        <td><a onclick="xoa();" href="admin.php?act=delbl&mabl=' . $bl['mabl'] . ' "><img src="https://cdn-icons-png.flaticon.com/128/7476/7476971.png" style="width:20px; height:20px;" ></a></td>
                                    </tr>';
                            $i++;
                        }
                        ?>
                    </table>
                </div>
            </div>
    </form>
</div>