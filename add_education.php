<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Học Vấn</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Thêm Học Vấn</h1>
    <form action="insert_education.php" method="POST">
        <input type="text" name="school_name" placeholder="Tên trường" required><br>
        <input type="text" name="major" placeholder="Chuyên ngành" required><br>
        <input type="text" name="study_period" placeholder="Thời gian học" required><br>
        <textarea name="description" placeholder="Mô tả thêm"></textarea><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
