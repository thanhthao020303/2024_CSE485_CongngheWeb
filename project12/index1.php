<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        nav {
            background: #f1f1f1;
            padding: 10px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            border-left: 1px solid red;
            padding: 0 10px;
            margin-right: 10px;
        }

        .container {
            display: flex;
            background-color: #f1f1f1;
            align-items: center;
        }

        .house {
            font-size: 25px;
            margin: 0 10px
        }
    </style>
</head>

<body>
    <?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
    ];
    echo '<div class="container"><i class="house fa-solid fa-house"></i><nav><ul> ';
    foreach ($navItems as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul></nav></div>';
    ?>

</body>

</html>