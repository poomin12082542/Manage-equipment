<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าหลัก</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      overflow-y: hidden
    }

    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #DAEFF7;

    }

    .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: #0972ce;
            display: block;
        }

        .sidebar a:not(.no-hover):hover,
        .sidebar a.active {
            background-color: white;
        }

    .content {
      margin-left: 250px;
      padding-top: 50px;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item"><a class="no-hover" href="home.php">
          <img src="pic/logo.png" alt="logo" width="200" height="200">
        </a></li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">ค้นหารายการครุภัณฑ์</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insertform.php">เพิ่มรายการครุภัณฑ์</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setting.php">การตั้งค่า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">เกี่ยวกับ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">ออกจากระบบ</a>
      </li>
    </ul>
  </div>

  <!-- Page Content -->
  <div class="content">
    <!-- Main Content -->
    <div class="container">
      <h2 style="color:#0972ce" >ระบบค้นหา จัดเก็บ ครุภัณฑ์คอมพิวเตอร์</h2>
      <p style="color:#0972ce">แผนกสารสนเทศ บริษัท ธนบุรี เฮลท์แคร์ กรุ๊ป จํากัด (มหาชน)</p>
      <img src="pic/pc.png" alt="pc" width="800" height="742" style="float:right">

    </div>
  </div>
</body>

</html>