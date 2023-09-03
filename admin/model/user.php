<?php

function checkuser($hoten, $matkhau)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE hoten='" . $hoten . "' AND matkhau='" . $matkhau . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['chucvu'];
    else return 0;
}
function getuser($data)
{
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE hoten 
        = '" . $_SESSION['hoten'] . "'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();

        if (count($kq) > 0) return $kq[0][$data];
        else return false;
    } else {
        return false;
    }
}



function chucvulogin($hoten, $matkhau)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eulalie";

    // tạo connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // kiểm connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE hoten='" . $hoten . "' AND matkhau='" . $matkhau . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output dữ liệu trên trang
        while ($row = $result->fetch_assoc()) {
            return $row["chucvu"];
        }
    } else {
        return "-1";
    }
}

function showid($hoten, $matkhau)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eulalie";

    // tạo connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // kiểm connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE hoten='" . $hoten . "' AND matkhau='" . $matkhau . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output dữ liệu trên trang
        while ($row = $result->fetch_assoc()) {
            return $row["iduser"];
        }
    } else {
        return "-1";
    }
}
