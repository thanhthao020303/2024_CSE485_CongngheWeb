<?php
$users = [
[
"username" => "johndoe",
"password" => password_hash("password123", PASSWORD_DEFAULT),
"name" => "John Doe",
"email" => "johndoe@example.com",
"role" => "user"
],
[
"username" => "Annie",
"password" => password_hash("password456", PASSWORD_DEFAULT),
"name" => "Annie May",
"email" => "annie@example.com",
"role" => "admin"
],
[
    "username" => "andy",
    "password" => password_hash("password456", PASSWORD_DEFAULT),
    "name" => "Anddy May",
    "email" => "anddymay@example.com",
    "role" => "admin"
    ],

];
$authorization_levels = [
"user" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => false,
],
"admin" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => true,
"manage_users" => true,
],

];
?>