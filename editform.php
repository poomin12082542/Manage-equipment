<?php
require ('dbconnect.php');

$id = $_GET["id"];

$sql = "SELECT * FROM items WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>แก้ไขข้อมูลครุภัณฑ์</title>
</head>

<body>
  
  <div class="container my-3">
    <h2 class="text-left">แก้ไขข้อมูลครุภัณฑ์</h2>
    <hr>
    <form action="updatedata.php" method="POST">
      <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
      <div class="form-group">
        <label for="number">เลขครุภัณฑ์ :</label>
        <input type="text" name="number" class="form-control" value="<?php echo $row["number"]; ?>">
      </div>
      <div class="form-group col-6">
        <label for="type">ประเภทครุภัณฑ์ :</label>
        <select name="type" class="form-control" required>
          <option value="โน๊ตบุ๊ค" <?php if ($row["type"] == "โน๊ตบุ๊ค") {
            echo "SELECTED";
          } ?>>โน๊ตบุ๊ค</option>
          <option value="คอมพิวเตอร์" <?php if ($row["type"] == "คอมพิวเตอร์") {
            echo "SELECTED";
          } ?>>คอมพิวเตอร์
          </option>
          <option value="จอภาพ" <?php if ($row["type"] == "จอภาพ") {
            echo "SELECTED";
          } ?>>จอภาพ</option>
          <option value="โน๊ตบุ๊ค" <?php if ($row["type"] == "โน๊ตบุ๊ค") {
            echo "SELECTED";
          } ?>>เครื่องพิมพ์</option>
          <option value="เครื่องพิมพ์" <?php if ($row["type"] == "เครื่องพิมพ์") {
            echo "SELECTED";
          } ?>>เครื่องพิมพ์
          </option>
          <option value="ถาดเครื่องพิมพ์" <?php if ($row["type"] == "ถาดเครื่องพิมพ์") {
            echo "SELECTED";
          } ?>>ถาดเครื่องพิมพ์</option>
          <option value="เครื่องพิมพ์สติกเกอร์" <?php if ($row["type"] == "เครื่องพิมพ์สติกเกอร์") {
            echo "SELECTED";
          } ?>>เครื่องพิมพ์สติกเกอร์</option>
          <option value="เครื่องแสกนเนอร์" <?php if ($row["type"] == "เครื่องแสกนเนอร์") {
            echo "SELECTED";
          } ?>>เครื่องแสกนเนอร์</option>
          <option value="เครื่องสำรองไฟ" <?php if ($row["type"] == "เครื่องสำรองไฟ") {
            echo "SELECTED";
          } ?>>เครื่องสำรองไฟ</option>
          <option value="เครื่องอ่านบัตร" <?php if ($row["type"] == "เครื่องอ่านบัตร") {
            echo "SELECTED";
          } ?>>เครื่องอ่านบัตร</option>
          <option value="ปลั๊กพ่วง" <?php if ($row["type"] == "ปลั๊กพ่วง") {
            echo "SELECTED";
          } ?>>ปลั๊กพ่วง</option>
          <option value="เครื่องแสกนนิ้ว" <?php if ($row["type"] == "เครื่องแสกนนิ้ว") {
            echo "SELECTED";
          } ?>>เครื่องแสกนนิ้ว</option>
          <option value="กล้องวงจรปิด" <?php if ($row["type"] == "กล้องวงจรปิด") {
            echo "SELECTED";
          } ?>>กล้องวงจรปิด
          </option>
          <option value="อุปกรณ์กระจายสัญญาณ" <?php if ($row["type"] == "อุปกรณ์กระจายสัญญาณ") {
            echo "SELECTED";
          } ?>>อุปกรณ์กระจายสัญญาณ</option>
          <option value="อุปกรณ์เข้าหัวสายแลน" <?php if ($row["type"] == "อุปกรณ์เข้าหัวสายแลน") {
            echo "SELECTED";
          } ?>>อุปกรณ์เข้าหัวสายแลน</option>
        </select>
        <div>
          <div class="form-group">
            <label for="brand">ยี่ห้อ/รุ่น :</label>
            <input type="text" name="brand" class="form-control" value="<?php echo $row["brand"]; ?>">
          </div>
          <div class="form-group">
            <label for="user">ผู้ใช้งาน :</label>
            <input type="text" name="user" class="form-control" value="<?php echo $row["user"]; ?>">
          </div>
          <div class="form-group">
            <label for="location">ที่ตั้งปัจจุบัน :</label>
            <input type="text" name="location" class="form-control" value="<?php echo $row["location"]; ?>">
          </div>
          <div class="form-group">
            <label for="status">สถานะ :</label>
            <input type="text" name="status" class="form-control" value="<?php echo $row["status"]; ?>">
          </div>
          <div class="form-group">
            <label for="serial">Serial Number :</label>
            <input type="text" name="serial" class="form-control" value="<?php echo $row["serial"]; ?>">
          </div>
          <div class="form-group">
            <label for="note">หมายเหตุ :</label>
            <textarea name="note" class="form-control"><?php echo $row["note"]; ?></textarea>
          </div>
          <div class="my-3">
            <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
            <a href="search.php" class="btn btn-danger">ยกเลิก</a>
          </div>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>