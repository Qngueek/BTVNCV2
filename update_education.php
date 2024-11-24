<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $school_name = $_POST['school_name'];
    $major = $_POST['major'];
    $study_period = $_POST['study_period'];
    $description = $_POST['description'];

    $sql = "UPDATE education SET school_name='$school_name', major='$major', study_period='$study_period', description='$description' WHERE id=$id";

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
