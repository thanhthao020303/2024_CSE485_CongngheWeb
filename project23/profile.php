
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
 header('Location: login.php'); 
}

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
$username = $_SESSION['user_id'];

$user = null;
foreach ($users as $u) {
 if ($u['username'] === $username) {
 $user = $u;
 break;
 }
}
if ($user) {

 echo "Welcome, " . $user['name'] . "!";
 echo "<br>Email: " . $user['email'];
 
} else {
 echo "Error: User not found.";
}
?>