<?php
// Biến kết nối toàn cục
global $conn;

// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn) {
        $conn = mysqli_connect('localhost', 'root', '', 'eulalie') or die('Lỗi kết nối');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}

// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn) {
        mysqli_close($conn);
    }
}

// Hàm lấy tất cả khách hàng
function get_all_users()
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy tất cả khách hàng
    $sql = "select * from user";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    // Mảng chứa kết quả
    $result = array();

    // Lặp qua từng record và đưa vào biến kết quả
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
    }

    // Trả kết quả về
    return $result;
}

// Hàm lấy khách hàng theo ID
function get_users($iduser)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy tất cả khách hàng
    $sql = "select * from user where iduser = {$iduser}";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    // Mảng chứa kết quả
    $result = array();

    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }

    // Trả kết quả về
    return $result;
}

// Hàm thêm khách hàng
// function add_users($hoten, $sdt, $email, $diachi)
// {
//     // Gọi tới biến toàn cục $conn
//     global $conn;

//     // Hàm kết nối
//     connect_db();

//     // Chống SQL Injection
//     $hoten = addslashes($hoten);
//     $sdt = addslashes($sdt);
//     $email = addslashes($email);
//     $diachi = addslashes($diachi);

//     // Câu truy vấn thêm
//     $sql = "
//             INSERT INTO user(hoten, sdt, email, diachi) VALUES
//             ('$hoten','$sdt','$email', '$diachi')
//     ";

//     // Thực hiện câu truy vấn
//     $query = mysqli_query($conn, $sql);

//     return $query;
// }


// Hàm sửa khách hàng
function edit_users($iduser, $hoten, $sdt, $email, $diachi)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Chống SQL hoten
    $hoten = addslashes($hoten);
    $sdt = addslashes($sdt);
    $email = addslashes($email);
    $diachi = addslashes($diachi);

    // Câu truy sửa
    $sql = "
            UPDATE user SET
            hoten = '$hoten',
            sdt = '$sdt',
            email = '$email',
            diachi = '$diachi'
            WHERE iduser = $iduser
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}


// Hàm xóa khách hàng
function delete_users($iduser)
{
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    connect_db();

    // Câu truy sửa
    $sql = "
            DELETE FROM user    
            WHERE iduser = $iduser
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}