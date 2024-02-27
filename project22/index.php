<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Account Settings</title>
</head>
<body>
    <h2>Account Settings</h2>
    <?php include 'upload_profile.php'; ?>

    <div class="container" id="container">
        <div class="in4-left"> 
            <div class="avatar-preview" id="avatarPreview">
                <img src="#" alt="Avatar Preview">
            </div>
            <div class="avatar-upload">
                <label for="avatar">Change Avatar:</label><br>
                <input type="file" id="avatar" name="avatar" accept="image/*"><br><br>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10,11}" required><br><br>
                <label for="company">Company Name:</label><br>
                <input type="text" id="company" name="company"><br><br>
                <input type="submit" value="Submit"> 
            </form> 
            <?php
                // Thêm đoạn mã PHP xử lý upload ảnh và cập nhật thông tin người dùng ở đây
            ?>
        </div>
        <div class="in4-right"> 
            <br><label for="Profile" id="Profile">Profile</label></br>
            <br><label for="Password" id="pass">Password</label></br>
            <br><label for="Intergrations" id="inter">Intergrations</label></br>
            <br><label for="Billing" id="bill">Billing</label></br>
        </div>
    </div>

    <script>
        const avatarInput = document.getElementById('avatar');
        const avatarPreview = document.getElementById('avatarPreview');
        
        avatarInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    avatarPreview.innerHTML = '<img src="' + reader.result + '" alt="Avatar Preview">';
                }
                reader.readAsDataURL(file);
            } else {
                avatarPreview.innerHTML = '<img src="#" alt="Avatar Preview">';
            }
        });
    </script> 
</body>
</html>
