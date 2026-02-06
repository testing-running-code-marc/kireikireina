<?php
session_start();
include 'php';

$username = $_POST["username"];
$password = $_POST['password'];

$sql = 'SELECT * FROM users WHERE username '$username'';
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
    {$row = mysqli_fetch_assoc($result)};
    else(echo 'user not found');
if (password_verify($password, $row['password'])){$_SESSION['username'] = $username;
header('Location; dashboard.php')};
else{echo "wrong password";
}

