<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $work_period = $_POST['work_period'];
    $job_description = $_POST['job_description'];

    $sql = "UPDATE experience SET company_name='$company_name', position='$position', work_period='$work_period', job_description='$job_description' WHERE id=$id";

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
