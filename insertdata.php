<?php
require('dbconnect.php');

$number = $_POST["number"];
$type = $_POST["type"];
$brand = $_POST["brand"];
$user = $_POST["user"];
$location = $_POST["location"];
$state = $_POST["state"];
$serial = $_POST["serial"];
$note = $_POST["note"];

$sql = "INSERT INTO items(number,type,brand,user,location,status,serial,note) VALUE('$number','$type','$brand','$user','$location','$state','$serial','$note')";


$result = mysqli_query($con, $sql);


if ($result) {
  header("location:insertform.php");
  exit(0);
} else {
  echo mysqli_error($con);
}
