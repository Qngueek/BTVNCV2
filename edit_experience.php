<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM experience WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Kinh Nghiệm</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Chỉnh Sửa Kinh Nghiệm Làm Việc</h1>
    <form action="update_experience.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="company_name" value="<?php echo $row['company_name']; ?>" required><br>
        <input type="text" name="position" value="<?php echo $row['position']; ?>" required><br>
        <input type="text" name="work_period" value="<?php echo $row['work_period']; ?>" required><br>
        <textarea name="job_description"><?php echo $row['job_description']; ?></textarea><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
