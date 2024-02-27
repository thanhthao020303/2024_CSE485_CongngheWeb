<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra và xử lý đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    $users = [
        [
            "username" => "johndoe",
            "password" => password_hash("password123", PASSWORD_DEFAULT),
            "name" => "John Doe",
            "email" => "johndoe@example.com"
        ],
        [
            "username" => "annie",
            "password" => password_hash("password123", PASSWORD_DEFAULT),
            "name" => "Anny May",
            "email" => "anniemay@example.com"
        ],
        [
            "username" => "cypher",
            "password" => password_hash("password123", PASSWORD_DEFAULT),
            "name" => "Christopher Cypher",
            "email" => "cypher@example.com"
        ],
    ];

   
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }

    if ($user && password_verify($password, $user['password'])) {
        
        $_SESSION['user_id'] = $user['username']; 
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); 
        header('Location: profile.php'); 
        exit; 
    } else {
        
        echo "Invalid username or password.";
    }
} else {
    
    echo "Invalid request method.";
    exit; 
}
?>
