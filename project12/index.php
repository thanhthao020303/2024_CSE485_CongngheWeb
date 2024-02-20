<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>project12</title>
</head>

<body>
    <?php
    $navItems = [
        "GIỚI THIỆU" => [],
        "TIN TỨC & THÔNG BÁO" => ["TIN TỨC", "THÔNG BÁO"],
        "TUYỂN SINH" => ["Tuyển sinh 1", "Tuyển sinh 2", "Tuyển sinh 3"],
        "ĐÀO TẠO" => [],
        "NGHIÊN CỨU" => [],
        "ĐỐI NGOẠI" => [],
        "VĂN BẢN" => ["Văn bản 1", "Văn bản 2"],
        "SINH VIÊN" => [],
        "LIÊN HỆ" => []
    ];
    echo '<nav>
    <i class="fas fa-home icon"></i>
    <ul>';
    foreach ($navItems as $key => $value) {
        echo "<li class='item'>$key";
        if (count($value) > 0) {
            echo "<ul class='sub-menu'>";
            foreach ($value as $subItem) {
                echo "<li>$subItem</li>";
            }
            echo "</ul>";
        }
        echo "</li>";
    }
    echo '</ul></nav>';
    ?>
</body>

</html>
