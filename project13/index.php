<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danh sách khóa học sắp khai giảng </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<h3> Khóa học sắp khai giảng</h3>
<?php

$courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'download.jpg' 
    ],
    [
        'title' => 'Khóa học Full-stack Development',
        'description' => 'Khóa học đào tạo full-stack development từ cơ bản đến nâng cao.',
        'fee' => '20.000.000 VND',
        'start_date' => '5/5/24',
        'duration' => '1.5 - 2 năm',
        'image' => 'download.jpg'
    ],
    [
        'title' => 'Khóa học Data Science',
        'description' => 'Khóa học chuyên sâu về khoa học dữ liệu và machine learning.',
        'fee' => '25.000.000 VND',
        'start_date' => '6/6/24',
        'duration' => '2.5 - 3 năm',
        'image' => 'download.jpg'
    ],
    
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'download.jpg' 
    ],
    [
        'title' => 'Khóa học Full-stack Development',
        'description' => 'Khóa học đào tạo full-stack development từ cơ bản đến nâng cao.',
        'fee' => '20.000.000 VND',
        'start_date' => '5/5/24',
        'duration' => '1.5 - 2 năm',
        'image' => 'download.jpg' 
    ],
    [
        'title' => 'Khóa học Data Science',
        'description' => 'Khóa học chuyên sâu về khoa học dữ liệu và machine learning.',
        'fee' => '25.000.000 VND',
        'start_date' => '6/6/24',
        'duration' => '2.5 - 3 năm',
        'image' => 'download.jpg' 
    ],
];


echo '<div class="courses-container">';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">'; 
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p><i class="fas fa-money-bill-alt"></i>Học phí: ' . $course['fee'] . '</p>';
    echo '<p><i class="far fa-calendar-alt"></i>Khai giảng: ' . $course['start_date'] . '</p>';
    echo '<p><i class="far fa-clock"></i>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
echo '</div>';
?>
</body>
</html>
