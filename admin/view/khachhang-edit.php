<!DOCTYPE html>
<html>

<head>
    <title>Sửa thông tin khách hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
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
    margin-bottom: 45px;
    text-align: center;
}


.formcontent {
    padding: 20px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

/*  */
table th:nth-child(1) {
    width: 5%;
    padding: 20px 0px;
    background-color: beige;

}

table th:nth-child(2) {
    width: 5%;
    background-color: beige;


}

table th:nth-child(3) {
    width: 7%;
    background-color: beige;


}

table th:nth-child(4) {
    width: 15%;
    background-color: beige;


}

table th:nth-child(5) {
    width: 15%;
    background-color: beige;


}

table th:nth-child(6) {
    width: 10%;
    background-color: beige;


}

table th:nth-child(7) {
    width: 5%;
    background-color: beige;


}

table th:nth-child(8) {
    width: 30%;
    background-color: beige;


}

table th:nth-child(9) {
    width: 1%;
    background-color: beige;


}






table td {
    padding: 10px 20px;
    border: 1px #ccc solid;
    color: #ff0844;
}

table th {
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
    margin-left: 15px;
    padding: 4px 10px;
    border-radius: 5px;
    color: #ffff;
}

.formcontent .mb1 input[type="button"]:hover {
    border: 1px rgb(247, 197, 197) solid;
    background-color: beige;
}
</style>

<body>
    <div class="row headeradmin">
        QUẢN LÝ CẬP NHẬT THÔNG TIN USER
    </div>
    <a href="khachhang-list.php">Trở về</a> <br /> <br />
    <form method="post" action="admin.php?act=updateuser&iduser=<?php echo $data['iduser']; ?>">
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Họ tên</td>
                <td>
                    <input style="width:100%" type="text" name="hoten" value="<?php echo $data['hoten']; ?>" />
                    <?php if (!empty($errors['hoten'])) echo $errors['hoten']; ?>
                </td>
            </tr>
            <tr>
                <td>SĐT</td>
                <td>
                    <input style="width:100%" type="text" name="sdt" value="<?php echo $data['sdt']; ?>" />
                    <?php if (!empty($errors['sdt'])) echo $errors['sdt']; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input style="width:100%" type="text" name="email" value="<?php echo $data['email']; ?>" />
                    <?php if (!empty($errors['email'])) echo $errors['email']; ?>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input style="width:100%" type="text" name="diachi" value="<?php echo $data['diachi']; ?>" />
                    <?php if (!empty($errors['diachi'])) echo $errors['diachi']; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input style="width:100%" type="hidden" name="iduser" value="<?php echo $data['iduser']; ?>" />
                    <input type="submit" name="edit_users" value="Cập Nhật"
                        class="btn btn-success waves-effect waves-light" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>