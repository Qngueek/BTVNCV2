<?php include 'db.php';

$id = $_GET['id'];

if (isset($id)) {
    $sql = "DELETE FROM personal_info WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm thành công!";
        header('Location: index.php');
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>
