<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ลงชื่อเข้าใช้งาน</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container login-container">
    <h2 class="text-center ">ลงชื่อเข้าใช้งาน</h2><br>
    <h2 class="text-center mb-4">ระบบค้นหา จัดเก็บ ครุภัณฑ์คอมพิวเตอร์</h2>
    <form method="POST" action="chk.php">
      <div class="form-group">
        <label for="username" class="form-label">ชื่อผู้ใช้</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="กรอกชื่อผู้ใช้" required>
      </div>
      <div class="form-group">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">ลงชื่อเข้าใช้</button>
      <p><small> ลืมรหัสผ่าน หรือไม่มีชื่อผู้ใช้กรุณาติดต่อเจ้าหน้าที่คอมพิวเตอร์</p></small>
    </form>
  </div>
</body>
</html>
