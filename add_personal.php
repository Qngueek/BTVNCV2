<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Thông Tin Cá Nhân</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Thêm Thông Tin Cá Nhân</h1>
    <form action="insert_personal.php" method="POST">
        <input type="text" name="full_name" placeholder="Họ tên" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Điện thoại" required><br>
        <input type="text" name="address" placeholder="Địa chỉ" required><br>
        <textarea name="description" placeholder="Mô tả ngắn về bản thân"></textarea><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
