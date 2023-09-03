<?php
if (session_id() == '') session_start();
if (isset($_SESSION['hoten']) == false) {
    header("location: index.php");
    exit();
}
$tendangnhap = $_SESSION['hoten'];
// print_r($_POST);
$loi = "";
if (isset($_POST['btndoimatkhau']) == true) {
    $matkhaucu = $_POST['matkhaucu'];
    $matkhaumoi_1 = $_POST['matkhaumoi_1'];
    $matkhaumoi_2 = $_POST['matkhaumoi_2'];

    $conn = new PDO("mysql:host=localhost;dbname=eulalie;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user WHERE hoten = ? and matkhau = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$tendangnhap, $matkhaucu]);

    if ($stmt->rowCount() == 0) {
        $loi .= "Mật khẩu cũ sai<br>";
    }
    if ($matkhaumoi_1 != $matkhaumoi_2) {
        $loi .= "Mật khẩu mới không giống nhau<br>";
    }
    if ($matkhaumoi_1 == "") {
        $loi .= "Chưa nhập mật khẩu mới<br>";
    }

    if ($loi == "") {
        $sql = "UPDATE user SET matkhau= ? WHERE hoten = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$matkhaumoi_2, $tendangnhap]);
        $message = 'Đã cập nhật mật khẩu mới';
        echo "<script>if(confirm('$message')==true){
            location.href = 'index.php';
        }else{
            location.href = 'index.php';
        }
        </script>";
    }
}
?>
<style>
.dmk{
    height: 100%;
            background-color: #1a1a2e;
            padding-top: 100px;
    }
.trangchu {
    align-items: center;
    background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
    border: 0;
    border-radius: 8px;
    box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
    box-sizing: border-box;
    color: #FFFFFF;
    display: flex;
    font-family: Phantomsans, sans-serif;
    font-size: 20px;
    justify-content: center;
    line-height: 1em;
    max-width: 10%;
    min-width: 10px;
    text-decoration: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
    cursor: pointer;
    height: 48px;
    margin: 20px auto;
}

.trangchu:active,
.trangchu:hover {
    outline: 0;
}

@media (min-width: 768px) {
    .trangchu {
        font-size: 24px;
        min-width: 196px;
    }
}

.hide-show {
    position: relative;
}

.hide-show input {
    outline: none;
}
h4{
    margin-left:215px ;
    color:white;
}
label{
    color:white;
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
.mb-3 input{
    width: 500px;
    margin-left:40px ;
}
.mb-3 label{
    margin-left:40px ;
}
.hide-show input:valid~span {
    display: block;

}

.hide-show span i.hide-btn::before {
    content: "f070";

}
.fa-eye:before {
    content: "\f06e";
    color: #ccc;
}
.btn-primary{
    margin-left:40px ;
    
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<div class="dmk">
<form method="POST" style="width:600px" class="border border-primary rounded border-2 p-2 m-auto mt-2">
<h4>Đổi Mật Khẩu</h4>
    <?php if ($loi != "") { ?>
    <div class="alert alert-secondary"><?php echo $loi ?></div>}
    <?php } ?>
    <div class="mb-3">
        <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
        <input value="<?php echo $tendangnhap ?>" type="text" disabled class="form-control" id="tendangnhap"
            name="tendangnhap" placeholder="">
    </div>
    <div class="mb-3">
        <label for="matkhaucu" class="form-label">Mật khẩu cũ</label>
        <div class="hide-show">
            <input value="<?php if (isset($matkhaucu) == true) echo $matkhaucu; ?>" type="password" class="form-control"
                id="matkhaucu" name="matkhaucu">
            <span class="show-btn"><i id="matkhaucuhide" class="fas fa-eye"></i></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="matkhaumoi_1" class="form-label">Mật khẩu mới</label>
        <div class="hide-show">
            <input value="<?php if (isset($matkhaumoi_1) == true) echo $matkhaumoi_1; ?>" type="password"
                class="form-control" id="matkhaumoi_1" name="matkhaumoi_1">
            <span class="show-btn"><i id="matkhauhide_1" class="fas fa-eye"></i></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="matkhaumoi_2" class="form-label">Gõ lại mật khẩu mới</label>
        <div class="hide-show">
            <input value="<?php if (isset($matkhaumoi_2) == true) echo $matkhaumoi_2; ?>" type="password"
                class="form-control" id="matkhaumoi_2" name="matkhaumoi_2">
            <span class="show-btn"><i id="matkhauhide_2" class="fas fa-eye"></i></span>
        </div>
    </div>
    <button type="submit" name="btndoimatkhau" value="doimk" class="btn btn-primary">Đổi mật khẩu</button>
</form>
<button class="trangchu" onclick="clickindex()">Trang chủ</button>
</div>
<script>
function clickindex() {
    window.location = "index.php";
}
const matkhaucu = document.getElementById("matkhaucu");
const matkhaucuhide = document.getElementById("matkhaucuhide");
matkhaucuhide.onclick = (() => {
    if (matkhaucu.type === "password") {
        matkhaucu.type = "text";
    } else {
        matkhaucu.type = "password";
    }
});

const matkhaumoi_1 = document.getElementById("matkhaumoi_1");
const matkhauhide_1 = document.getElementById("matkhauhide_1");
matkhauhide_1.onclick = (() => {
    if (matkhaumoi_1.type === "password") {
        matkhaumoi_1.type = "text";
    } else {
        matkhaumoi_1.type = "password";
    }
});

const matkhaumoi_2 = document.getElementById("matkhaumoi_2");
const matkhauhide_2 = document.getElementById("matkhauhide_2");
matkhauhide_2.onclick = (() => {
    if (matkhaumoi_2.type === "password") {
        matkhaumoi_2.type = "text";
    } else {
        matkhaumoi_2.type = "password";
    }
});
</script>