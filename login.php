<?php
session_start();
// ob_start();

if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    include "admin/model/connectdb.php";
    include "admin/model/user.php";
    $hoten = $_POST['hoten'];
    $matkhau = $_POST['matkhau'];
    $chucvu = checkuser($hoten, $matkhau);
    $chucvu1 = chucvulogin($hoten, $matkhau);
    $iduser = showid($hoten, $matkhau);

    // echo ($iduser);
    if ($chucvu == 1 && $chucvu1 == '1') {
        $_SESSION['chucvu'] = $chucvu;
        header('location: admin.php');
    } else if ($chucvu == 0 && $chucvu1 == '0') {
        $_SESSION['chucvu'] = $chucvu;
        $_SESSION['hoten'] = $hoten;
        $_SESSION['iduser'] = $iduser;
        header('location: index.php');
    } else {
        $canhbao = "User hoặc Pass bị sai !";
    }
} else {
    $canhbao = "";
}

// ob_get_contents();
// ob_end_clean();

?>
<style>
    :root {
        /* --background: #c9c359; */
        --background: #1a1a2e;
        --color: #ffffff;
        --primary-color: #0f3460;
    }

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
        font-family: "poppins";

    }

    body {
        margin: 0;
        box-sizing: border-box;
        /* font-family: "poppins"; */
        background: var(--background);
        color: var(--color);
        letter-spacing: 1px;
        transition: background 0.2s ease;
        -webkit-transition: background 0.2s ease;
        -moz-transition: background 0.2s ease;
        -ms-transition: background 0.2s ease;
        -o-transition: background 0.2s ease;
    }

    a {
        text-decoration: none;
        color: var(--color);
    }

    h1 {
        font-size: 2.5rem;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        position: relative;
        width: 22.2rem;
    }

    .form-container {
        border: 1px solid hsla(0, 0%, 65%, 0.158);
        box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        backdrop-filter: blur(20px);
        z-index: 99;
        padding: 2rem;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
    }

    .login-container form input {
        display: block;
        padding: 14.5px;
        width: 100%;
        margin: 2rem 0;
        color: var(--color);
        outline: none;
        background-color: #9191911f;
        border: none;
        border-radius: 5px;
        font-weight: 500;
        letter-spacing: 0.8px;
        font-size: 15px;
        backdrop-filter: blur(15px);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }

    .login-container form input:focus {
        box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
        animation: wobble 0.3s ease-in;
        -webkit-animation: wobble 0.3s ease-in;
    }

    .login-container form input[type="submit"] {
        background-color: var(--primary-color);
        color: var(--color);
        display: block;
        padding: 13px;
        border-radius: 5px;
        outline: none;
        font-size: 18px;
        letter-spacing: 1.5px;
        font-weight: bold;
        width: 100%;
        cursor: pointer;
        margin-bottom: 2rem;
        transition: all 0.1s ease-in-out;
        border: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -ms-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
    }

    .login-container form input[type="submit"]:hover {
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
        transform: scale(1.02);
        -webkit-transform: scale(1.02);
        -moz-transform: scale(1.02);
        -ms-transform: scale(1.02);
        -o-transform: scale(1.02);
    }

    .circle {
        width: 8rem;
        height: 8rem;
        background: var(--primary-color);
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        position: absolute;
    }

    .illustration {
        position: absolute;
        top: -14%;
        right: -2px;
        width: 90%;
    }

    .circle-one {
        top: 0;
        left: 0;
        z-index: -1;
        transform: translate(-45%, -45%);
        -webkit-transform: translate(-45%, -45%);
        -moz-transform: translate(-45%, -45%);
        -ms-transform: translate(-45%, -45%);
        -o-transform: translate(-45%, -45%);
    }

    .circle-two {
        bottom: 0;
        right: 0;
        z-index: -1;
        transform: translate(45%, 45%);
        -webkit-transform: translate(45%, 45%);
        -moz-transform: translate(45%, 45%);
        -ms-transform: translate(45%, 45%);
        -o-transform: translate(45%, 45%);
    }

    .register-forget {
        margin: 1rem 0;
        display: flex;
        justify-content: space-between;
    }

    .opacity {
        opacity: 0.6;
    }

    .theme-btn-container {
        position: absolute;
        left: 500px;
        bottom: 300px;
    }

    .theme-btn {
        cursor: pointer;
        transition: all 0.3s ease-in;
    }

    .theme-btn:hover {
        width: 40px !important;
    }

    @keyframes wobble {
        0% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        25% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }

        75% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }
    }

    .trangchu {
        align-items: center;
        background-color: var(--primary-color);
        border: 0;
        border-radius: 8px;
        /* box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px; */
        box-sizing: border-box;
        color: #ccc;
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
</style>

<!--  -->
<section class="container">

    <div class="login-container">

        <div class="circle circle-one"></div>
        <div class="form-container">
            <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
            <h1 class="opacity">ĐĂNG NHẬP</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="text" name="hoten" placeholder="Tài Khoản" required="" />
                <input type="password" name="matkhau" placeholder="Mật Khẩu" required="" />
                <input type="submit" class="opacity" value="Đăng Nhập" name="dangnhap">
                <?php
                if (isset($canhbao) && ($canhbao != "")) {
                    echo "<font color='red'>" . $canhbao . "</font>";
                }
                ?>
            </form>
            <div class="register-forget opacity">
                <a href="register.php">ĐĂNG KÍ</a>
                <a href="forget-pass.php">QUÊN MẬT KHẨU</a>
            </div>
        </div>
        <div class="circle circle-two"></div>
        <button class="trangchu" onclick="clickindex()">Trang chủ</button>
    </div>
    <div class="theme-btn-container"></div>
</section>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    function clicklogin() {
        window.location = "login.php";
    }

    function clickindex() {
        window.location = "index.php";
    }
</script>
<!-- <script src="js/login2.js"></script> -->