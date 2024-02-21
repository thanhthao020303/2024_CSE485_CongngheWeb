<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách khóa học</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Trung tâm đào tạo ABC</h1>
  </header>
  <main>
    <h2>Danh sách khóa học</h2>
    <div class="courses">
      <?php
      // Dữ liệu khóa học lưu động trong mảng
      $courses = [
        [
          'title' => 'Lập trình viên quốc tế',
          'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
          'fee' => '15.000.000 VND',
          'start_date' => '2/2/24',
          'duration' => '2 - 2.5 năm'
        ],
        // Thêm các khóa học khác vào đây
        [
          'title' => 'Thiết kế đồ họa',
          'description' => 'Chương trình đào tạo chuyên sâu về thiết kế đồ họa, bao gồm Photoshop, Illustrator, InDesign, và Premiere Pro.',
          'fee' => '12.000.000 VND',
          'start_date' => '5/3/24',
          'duration' => '1.5 năm'
        ],
        [
          'title' => 'Marketing online',
          'description' => 'Chương trình đào tạo về các chiến lược marketing online hiệu quả, bao gồm SEO, SEM, Google Ads, Facebook Ads, và Email Marketing.',
          'fee' => '10.000.000 VND',
          'start_date' => '10/4/24',
          'duration' => '6 tháng'
        ],
        [
          'title' => 'Tiếng Anh giao tiếp',
          'description' => 'Chương trình đào tạo giúp học viên cải thiện khả năng giao tiếp tiếng Anh một cách hiệu quả.',
          'fee' => '8.000.000 VND',
          'start_date' => '15/5/24',
          'duration' => '4 tháng'
        ],
        [
          'title' => 'Kế toán',
          'description' => 'Chương trình đào tạo về các kiến thức và kỹ năng kế toán cơ bản.',
          'fee' => '6.000.000 VND',
          'start_date' => '20/6/24',
          'duration' => '3 tháng'
        ],
        [
          'title' => 'Tin học văn phòng',
          'description' => 'Chương trình đào tạo về các phần mềm tin học văn phòng phổ biến như Word, Excel, PowerPoint, và Outlook.',
          'fee' => '4.000.000 VND',
          'start_date' => '25/7/24',
          'duration' => '2 tháng'
        ],
      ];
      // Hiển thị danh sách khóa học
      foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<h3>' . $course['title'] . '</h3>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p>Học phí: ' . $course['fee'] . '</p>';
        echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </main>
</body>
</html>
