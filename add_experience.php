<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Kinh Nghiệm</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Thêm Kinh Nghiệm Làm Việc</h1>
    <form action="insert_experience.php" method="POST">
        <input type="text" name="company_name" placeholder="Tên công ty" required><br>
        <input type="text" name="position" placeholder="Vị trí" required><br>
        <input type="text" name="work_period" placeholder="Thời gian làm việc" required><br>
        <textarea name="job_description" placeholder="Mô tả công việc"></textarea><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
