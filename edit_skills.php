<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM skills WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Kỹ Năng</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Chỉnh Sửa Kỹ Năng</h1>
    <form action="update_skills.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="skill_name" value="<?php echo $row['skill_name']; ?>" required><br>
        <input type="text" name="proficiency" value="<?php echo $row['proficiency']; ?>" required><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
