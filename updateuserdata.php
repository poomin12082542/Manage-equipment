<?php
require('dbconnect.php');

$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];



$sql = "UPDATE user SET username ='$username', password ='$password' WHERE id=$id; ";

$result = mysqli_query($con, $sql);

if ($result) {
  header("location:setting.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($con);
}
