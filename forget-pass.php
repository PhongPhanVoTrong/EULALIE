    <style>
.quenmk {
    height: 100%;
    background-color: #1a1a2e;
    padding-top: 200px;
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

h4 {
    color: white;
}

label {
    color: white;
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

.noenter {
    display: flex;
}

.dangnhap {
    margin-left: -500px;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <?php
    $loi = "";
    if (isset($_POST['btnguiyeucau']) == true) {
        $email = $_POST['email'];
        $conn = new PDO("mysql:host=localhost;dbname=eulalie;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "select * from user where email = ?";
        $stmt = $conn->prepare($sql); //Taoj 1 prepare stement
        $stmt->execute([$email]);
        $count = $stmt->rowCount();
        if ($count == 0) {
            $loi = "Email chưa đăng ký";
        } else {
            $matkhaumoi = substr(md5(rand(0, 999999)), 0, 8); //tạo mật khẩu ngẫu nhiên
            $sql = "update user set matkhau = ? where email = ?";
            $stmt = $conn->prepare($sql); //Taoj 1 prepare stement
            $stmt->execute(([$matkhaumoi, $email]));
            // echo "Đã cập nhật mật khẩu mới";
            GuiMatKhauMoi($email, $matkhaumoi);
        }
    }
    ?>
    <?php
    function GuiMatKhauMoi($email, $matkhaumoi)
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'nhocsocklbig23@gmail.com'; // SMTP username
            $mail->Password = 'ypmbnoljkehbsgra';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('nhocsocklbig23@gmail.com', 'Phong');
            $mail->addAddress($email);
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi lại mật khẩu';
            $noidungthu = "<p>Bạn nhận được thư này, do bạn đã yêu cầu mật khẩu mới từ chúng tôi</p>
            Mật khẩu mới của bạn là {$matkhaumoi}";
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    } ?>
    <div class="quenmk">
        <form method="post" style="width:600px" class="border border-primary border-3 mt-2 m-auto p-2">
            <h4 class="mb-3 text-center">
                Quên mật khẩu
            </h4>
            <?php if ($loi != "") { ?>
            <div class="alert alert-danger"><?= $loi ?></div>
            <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Nhập Email đăng ký</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php if (isset($email) == true) echo $_POST['email'] ?>">
            </div>

            <button type="submit" name="btnguiyeucau" value="btnguiyeucau" class="btn btn-primary">Gửi yêu cầu</button>
        </form>
        <div class="noenter">
            <button class="trangchu" onclick="clickindex()">Trang chủ</button>
            <button class="trangchu dangnhap" onclick="clicklogin()">Đăng nhập</button>
        </div>
    </div>
    <script>
function clickindex() {
    window.location = "index.php";
}

function clicklogin() {
    window.location = "login.php";
}
    </script>