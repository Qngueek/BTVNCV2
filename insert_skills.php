<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skill_name = $_POST['skill_name'];
    $proficiency = $_POST['proficiency'];

    $sql = "INSERT INTO skills (skill_name, proficiency) VALUES ('$skill_name', '$proficiency')";

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
