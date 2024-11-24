<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $school_name = $_POST['school_name'];
    $major = $_POST['major'];
    $study_period = $_POST['study_period'];
    

    $sql = "INSERT INTO education (school_name, major, study_period) VALUES ('$school_name', '$major', '$study_period')";

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
