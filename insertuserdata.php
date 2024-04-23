<?php
require('dbconnect.php');

$username = $_POST["username"];
$password = $_POST["password"];


$sql = "INSERT INTO user(username,password) VALUE('$username','$password')";


$result = mysqli_query($con, $sql);


if ($result) {
  header("location:setting.php");
  exit(0);
} else {
  echo mysqli_error($con);
}
