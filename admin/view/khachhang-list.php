<?php
require 'khachhang.php';
$users = get_all_users();
disconnect_db();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Danh sách khách hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <br><br>
    <h1>Danh sách khách hàng</h1>
    <!-- <a href="khachhang-add.php">Thêm user</a> <br /> <br /> -->
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Họ tên</td>
            <td>Số điện thoại</td>
            <td>Email</td>
            <td>Địa chỉ</td>
            <td>Chức năng</td>
        </tr>
        <?php foreach ($users as $item) { ?>
        <tr>
            <td><?php echo $item['iduser']; ?></td>
            <td><?php echo $item['hoten']; ?></td>
            <td><?php echo $item['sdt']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['diachi']; ?></td>
            <td>
                <form method="post" action="admin.php?act=deleteuser">
                    <input onclick="window.location = 'admin.php?act=updateuser&iduser=<?php echo $item['iduser']; ?>'"
                        type="button" value="Sửa" />
                    <input type="hidden" name="iduser" value="<?php echo $item['iduser']; ?>" />
                    <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete"
                        value="Xóa" />
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>