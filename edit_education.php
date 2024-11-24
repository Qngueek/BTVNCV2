<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM education WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Học Vấn</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Chỉnh Sửa Học Vấn</h1>
    <form action="update_education.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="school_name" value="<?php echo $row['school_name']; ?>" required><br>
        <input type="text" name="major" value="<?php echo $row['major']; ?>" required><br>
        <input type="text" name="study_period" value="<?php echo $row['study_period']; ?>" required><br>
        <textarea name="description"><?php echo $row['description']; ?></textarea><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
