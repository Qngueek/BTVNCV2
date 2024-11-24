<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM personal_info WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Thông Tin Cá Nhân</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>Chỉnh Sửa Thông Tin Cá Nhân</h1>
    <form action="update_personal.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" required><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
        <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br>
        <textarea name="description"><?php echo $row['description']; ?></textarea><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>
