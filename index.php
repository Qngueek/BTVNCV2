<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Cá Nhân</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.delete-btn').click(function(){
            return confirm("Bạn có chắc chắn muốn xóa không?");
        });
    });
    </script>
</head>
<body>
    <div class="container">
        <!-- Cột trái -->
        <div class="left-column">
            <div class="section">
                <h2>Thông tin cá nhân</h2>
                <a href="add_personal.php" class="add-btn">+ Thêm mới</a>
                <br><br>
                <?php
                $result = $conn->query("SELECT * FROM personal_info");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p><strong>Họ tên:</strong> " . $row["full_name"] . "</p>";
                        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                        echo "<p><strong>Điện thoại:</strong> " . $row["phone"] . "</p>";
                        echo "<p><strong>Địa chỉ:</strong> " . $row["address"] . "</p>";
                        echo "<p><strong>Mô tả:</strong> " . $row["description"] . "</p>";
                        echo '<a href="edit_personal.php?id=' . $row['id'] . '" class="edit-btn">Chỉnh sửa</a>';
                        echo ' | ';
                        echo '<a href="delete_personal.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
                        echo "<hr>";
                    }
                } else {
                    echo "<p>Chưa có thông tin cá nhân.</p>";
                }
                ?>
            </div>

            <div class="section">
                <h2>Kỹ năng</h2>
                <a href="add_skills.php" class="add-btn">+ Thêm mới</a>
                <br><br>
                <?php
                $result = $conn->query("SELECT * FROM skills");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p><strong>Tên kỹ năng:</strong> " . $row["skill_name"] . ", <strong>Mức độ:</strong> " . $row["proficiency"] . "</p>";
                        echo '<a href="edit_skills.php?id=' . $row['id'] . '" class="edit-btn">Chỉnh sửa</a>';
                        echo ' | ';
                        echo '<a href="delete_skills.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
                        echo "<hr>";
                    }
                } else {
                    echo "<p>Chưa có kỹ năng nào.</p>";
                }
                ?>
            </div>
        </div>

        <!-- Cột phải -->
        <div class="right-column">
            <div class="section">
                <h2>Học vấn</h2>
                <a href="add_education.php" class="add-btn">+ Thêm mới</a>
                <br><br>
                <?php
                $result = $conn->query("SELECT * FROM education");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p><strong>Trường:</strong> " . $row["school_name"] . ", <strong>Chuyên ngành:</strong> " . $row["major"] . ", <strong>Thời gian:</strong> " . $row["study_period"] . "</p>";
                        echo '<a href="edit_education.php?id=' . $row['id'] . '" class="edit-btn">Chỉnh sửa</a>';
                        echo ' | ';
                        echo '<a href="delete_education.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
                        echo "<hr>";
                    }
                } else {
                    echo "<p>Chưa có thông tin học vấn.</p>";
                }
                ?>
            </div>

            <div class="section">
                <h2>Kinh nghiệm làm việc</h2>
                <a href="add_experience.php" class="add-btn">+ Thêm mới</a>
                <br><br>
                <?php
                $result = $conn->query("SELECT * FROM experience");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p><strong>Công ty:</strong> " . $row["company_name"] . ", <strong>Vị trí:</strong> " . $row["position"] . ", <strong>Thời gian:</strong> " . $row["work_period"] . "</p>";
                        echo "<p>" . $row["job_description"] . "</p>";
                        echo '<a href="edit_experience.php?id=' . $row['id'] . '" class="edit-btn">Chỉnh sửa</a>';
                        echo ' | ';
                        echo '<a href="delete_experience.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
                        echo "<hr>";
                    }
                } else {
                    echo "<p>Chưa có kinh nghiệm làm việc.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>



