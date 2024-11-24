<?php
$servername = "localhost";
$username = "root"; // hoặc tên người dùng của bạn
$password = ""; // mật khẩu nếu có
$dbname = "cv_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
