<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $skill_name = $_POST['skill_name'];
    $proficiency = $_POST['proficiency'];

    $sql = "UPDATE skills SET skill_name='$skill_name', proficiency='$proficiency' WHERE id=$id";

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
