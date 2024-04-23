<?php
require('dbconnect.php');

$id = $_POST["id"];
$number = $_POST["number"];
$type = $_POST["type"];
$brand = $_POST["brand"];
$user = $_POST["user"];
$location = $_POST["location"];
$status = $_POST["status"];
$serial = $_POST["serial"];
$note = $_POST["note"];


$sql = "UPDATE items SET number ='$number', type ='$type', brand='$brand',user='$user', location='$location', status='$status', serial='$serial',note='$note' WHERE id=$id; ";

$result = mysqli_query($con, $sql);

if ($result) {
  header("location:search.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($con);
}
