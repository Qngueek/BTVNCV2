<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Kỹ Năng</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Thêm Kỹ Năng</h1>
    <form action="insert_skills.php" method="POST">
        <input type="text" name="skill_name" placeholder="Tên kỹ năng" required><br>
        <input type="text" name="proficiency" placeholder="Mức độ thành thạo" required><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
