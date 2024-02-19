<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        nav{
            background: #f1f1f1;
        }
        nav>ul{
            display: flex;
            align-items: center;
            background-color: grey;
            padding: 8px;

        }
        li{
            list-style: none;
            border-left: 1px solid #fff;
            text-transform: uppercase;
            padding: 0 8px;
            color:#FFF;
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
echo '<nav><ul>';
foreach ($navItems as $item) {
 echo "<li>$item</li>";
}
echo '</ul></nav>';
?>  
</body>
</html>
