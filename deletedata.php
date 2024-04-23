<?php
require('dbconnect.php');

$id = $_GET["id"];

$sql = "DELETE FROM items WHERE id=$id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("location:search.php");
  exit(0);
} else {
  echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
}
