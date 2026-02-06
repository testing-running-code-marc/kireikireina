<?php dashboard
session_start();

if (isset($_SESSION['username'])){
    header("loaction: Untitled-1.php")
}