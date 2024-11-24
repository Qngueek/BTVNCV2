<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $work_period = $_POST['work_period'];
    $job_description = $_POST['job_description'];

    $sql = "INSERT INTO experience (company_name, position, work_period, job_description) VALUES ('$company_name', '$position', '$work_period', '$job_description')";

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
