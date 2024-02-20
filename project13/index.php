<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $new_img_link = 'https://cdnphoto.dantri.com.vn/ckarQHRRSbtIoU6VQ_sDcVyv4B0=/zoom/1200_630/2023/09/19/thumbfb-1695118499688.jpg';

    $courses = [
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
        [
            'img' => $new_img_link,
            'title' => 'Khoá học đào tạo quỷ đỏ hiện hình',
            'description' => 'Về team của chúng tôi và ta sẽ cùng nhau vô địch EPL',
            'fee' => 'Vô giá, Ưu đãi nhiều cho thành viên mới',
            'start_date' => '1998-1999',
            'duration' => '2024 - 2025'
        ],
    ];
    echo '<div class="container">';
    foreach ($courses as $course) {

        echo '<div class="course">';
        echo '<img class="course-img" src="' . $course['img'] . '" alt="' . $course['title'] . '">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<div class="course-info"><i class="gift fa-solid fa-gift"></i><p style="margin-left: 10px;">Học phí: ' . $course['fee'] . '</p></div>';
        echo '<div class="course-info"><i class="clock fa-solid fa-clock"></i><p style="margin-left: 10px;">Khải giảng: ' . $course['start_date'] . '</p></div>';
        echo '<div class="course-info"><i class="fa-solid fa-bookmark"></i><p style="margin-left: 10px;">Thời lượng: ' . $course['duration'] . '</p></div>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>
