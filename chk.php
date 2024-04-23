<?php
session_start();
include ("dbconnect.php");
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user where username='" . $username . "' AND password='" . $password . "'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("location:home.php");
    } else {
        echo "<script>";
        echo "alert(\"ชื่อเข้าระบบหรือรหัสผ่านไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {
    header("location:index.php");
}
