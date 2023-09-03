<?php
if (session_id() == '') session_start();
if (isset($_SESSION['iduser']) == false) {
    header("location: ../../index.php");
    exit();
}
$iduser = isset($_SESSION['iduser']) ? (int)$_SESSION['iduser'] : '';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eulalie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//submit
if (!empty($_POST['luu'])) {

    $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';

    $errors = array();
    if (empty($hoten)) {
        $errors['hoten'] = 'Chưa nhập Họ tên';
    }

    if (empty($sdt)) {
        $errors['sdt'] = 'Chưa nhập SĐT';
    }

    if (empty($email)) {
        $errors['email'] = 'Chưa nhập email';
    }

    if (empty($diachi)) {
        $errors['diachi'] = 'Chưa nhập địa chỉ';
    }

    // Neu ko co loi thi insert
    if (!$errors) {
        $sql = "UPDATE user " .
            "SET hoten = '$hoten'," .
            "sdt = '$sdt', " .
            "email = '$email', " .
            "diachi = '$diachi' " .
            "WHERE iduser = '$iduser'";

        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql);
        // Trở về trang danh sách
        header("location: index.php?act=thongtin");
    }
}

// $conn->close();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<section class="main-content-section">
    <br>
    <div class="thongtintaikhoan" id="thongtintaikhoan">
        <h1 class="taikhoan">Tài khoản của bạn</h1>
        <br>
        <h2 class="ngang"></h2>
        <hr>
        <p class="thongtin">THÔNG TIN TÀI KHOẢN</p>
        <?php
        $sql = "SELECT * FROM user WHERE iduser = '$iduser'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<p>ID tài khoản: " . "<span>" . $row["iduser"] . "</span>" . "</p>" .
                    "<p>Họ và tên: " . "<span>" . $row["hoten"] . "</span>" . "</p>" .
                    "<p>SĐT: " . "<span>" . $row["sdt"] . "</span>" . "</p>" .
                    "<p>Email: " . "<span>" . $row['email'] . "</span>" . "</p>" .
                    "<p>Địa chỉ: " . "<span>" . $row["diachi"] . "</span>" . "</p>";
                $hoten = $row["hoten"];
                $sdt = $row["sdt"];
                $email = $row["email"];
                $diachi = $row["diachi"];
                $matkhau = $row["matkhau"];
            }
        } else {
            echo "0 results";
        }
        ?>
        <button class="btn-1 custom-btn" id="btn-edit">Sửa</button>
    </div>
    <form method="post" id="form-edit">
        <h1>Sửa thông tin</h1>
        <br>
        <div class="form">
            <input type="text" name="hoten" autocomplete="off" required value="<?php echo $hoten ?>" placeholder="Hãy nhập Họ và tên" />

            <label for="text" class="label-name">
                <span class="content-name">
                    Họ và tên
                </span>
            </label>
        </div>
        <?php if (!empty($errors['hoten'])) echo $errors['hoten']; ?>

        <div class="form">
            <input type="text" name="sdt" autocomplete="off" required value="<?php echo $sdt ?>" placeholder="Hãy nhập số điện thoại" />
            <label for="text" class="label-name">
                <span class="content-name">
                    Số điện thoại
                </span>
            </label>
        </div>
        <?php if (!empty($errors['sdt'])) echo $errors['sdt']; ?>

        <div class="form">
            <input type="email" name="email" autocomplete="off" required value="<?php echo $email ?>" placeholder="Hãy nhập Email" />
            <label for="text" class="label-name">
                <span class="content-name">
                    Email
                </span>
            </label>
        </div>
        <?php if (!empty($errors['email'])) echo $errors['email']; ?>

        <div class="form">
            <input type="text" name="diachi" autocomplete="off" required value="<?php echo $diachi ?>" placeholder="Hãy nhập Địa chỉ" />
            <label for="text" class="label-name">
                <span class="content-name">
                    Địa chỉ
                </span>
            </label>
        </div>
        <?php if (!empty($errors['diachi'])) echo $errors['diachi']; ?>
        <input type="submit" name="luu" value="Lưu" />
        <!-- <button class="btn-1 custom-btn" name="luu" id="btn-edit">Lưu</button> -->
    </form>
</section>

<script>
    formedit = document.getElementById("form-edit");
    showformedit = document.getElementById("btn-edit");
    thongtintaikhoan = document.getElementById("thongtintaikhoan");
    showformedit.addEventListener('click', () => {
        formedit.style.display = 'flex';
        thongtintaikhoan.style.opacity = '0';
    })
</script>
<style>
    h1 {
        text-align: center;
    }

    .main-content-section {
        width: 1170px;
        margin: 0 auto;
    }

    /* 1 */
    .btn-1 {
        background: rgb(6, 14, 131);
        background: linear-gradient(0deg, rgba(6, 14, 131, 1) 0%, rgba(12, 25, 180, 1) 100%);
        border: none;
        background-color: red;
        margin: 20px;
        width: 90%;
        text-align: center;
    }

    .btn-1:hover {
        background: rgb(0, 3, 255);
        background: linear-gradient(0deg, rgba(0, 3, 255, 1) 0%, rgba(2, 126, 251, 1) 100%);
    }

    .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
    }

    .taikhoan {
        text-align: center;
    }

    .ngang {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        margin: 50px auto 0;
        background: #252a2b;
    }

    .thongtintaikhoan p {
        font-family: 'Courier New', Courier, monospace;
        font-weight: 900;
    }

    span {
        color: blue;
    }

    .thongtin {
        font-size: 20px;
    }

    .form {
        width: 30%;
        position: relative;
        height: 70px;
        overflow: hidden;
    }

    .form input {
        width: 100%;
        height: 100%;
        color: blue;
        padding-top: 20px;
        border: none;
        /* background-color: blue; */
    }

    .form label {
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        pointer-events: none;
        border-bottom: 1px solid white;
    }

    .form label::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 0px;
        width: 100%;
        height: 100%;
        border-bottom: 3px solid #fce38a;
        transform: translateX(-100%);
        transition: all 0.3s ease;
    }

    .content-name {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding-bottom: 5px;
        transition: all 0.3s ease;
        display: none;
    }

    .form input:focus {
        outline: none;
    }

    .form input:focus+.label-name .content-name,
    .form input:valid+.label-name .content-name {
        transform: translateY(-150%);
        font-size: 14px;
        left: 0px;
        color: #6d6d6d;
        display: block;
    }

    .form input:focus+.label-name::after,
    .form input:valid+.label-name::after {
        transform: translateX(0%);
    }

    .hide-show {
        position: relative;
    }

    .hide-show input {
        outline: none;
    }

    .hide-show span {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: #1a1a2e;
        cursor: pointer;
        display: none;
    }

    .hide-show input:valid~span {
        display: block;
    }

    .hide-show span i.hide-btn::before {
        content: "f070";
    }

    #form-edit {
        display: none;
        z-index: 1;
        margin-top: -530px;
        position: relative;
        /* display: flex; */
        flex-direction: column;
        align-items: center;
        padding-bottom: 70px;
        padding-top: 0;
    }

    .thongtintaikhoan {
        z-index: 0;
        position: relative;
        padding-bottom: 90px;
        padding-top: 0;
    }

    /* Chrome,Opera,Safari */
    ::-webkit-input-placeholder {
        color: red;
    }

    /* Firefox 19+ */
    ::-moz-placeholder {
        color: red;
    }

    /* Firefox 18- */
    :-moz-placeholder {
        color: red;
    }

    /* IE 10+ */
    :-ms-input-placeholder {
        color: red;
    }
</style>