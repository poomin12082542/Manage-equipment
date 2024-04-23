<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายการครุภัณฑ์</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
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
            margin-left: 350px;
            margin-right: 500px;
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
                <a class="active" href="insertform.php">เพิ่มรายการครุภัณฑ์</a>
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
            <h2 style="color:#0972ce">เพิ่มรายการครุภัณฑ์</h2>
            <?php //include "nav.php"; 
            ?>
            <hr>
            <form action="insertdata.php" method="POST" class="form-signin">
                <div class="form-group">
                    <label for="number">เลขครุภัณฑ์ :</label>
                    <input type="text" name="number" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="type">ประเภทครุภัณฑ์ :</label>
                    <select name="type" class="form-control" required>
                        <option value=""></option>
                        <option value="โน๊ตบุ๊ค">โน๊ตบุ๊ค</option>
                        <option value="คอมพิวเตอร์">คอมพิวเตอร์</option>
                        <option value="จอภาพ">จอภาพ</option>
                        <option value="เครื่องพิมพ์">เครื่องพิมพ์</option>
                        <option value="ถาดเครื่องพิมพ์">ถาดเครื่องพิมพ์</option>
                        <option value="เครื่องพิมพ์สติกเกอร์">เครื่องพิมพ์สติกเกอร์</option>
                        <option value="เครื่องแสกนเนอร์">เครื่องแสกนเนอร์</option>
                        <option value="เครื่องสำรองไฟ">เครื่องสำรองไฟ</option>
                        <option value="เครื่องอ่านบัตร">เครื่องอ่านบัตร</option>
                        <option value="ปลั๊กพ่วง">ปลั๊กพ่วง</option>
                        <option value="เครื่องแสกนนิ้ว">เครื่องแสกนนิ้ว</option>
                        <option value="กล้องวงจรปิด">กล้องวงจรปิด</option>
                        <option value="อุปกรณ์กระจายสัญญาณ">อุปกรณ์กระจายสัญญาณ</option>
                        <option value="อุปกรณเข้าหัวสายแลน">อุปกรณเข้าหัวสายแลน</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="brand">ยี่ห้อ/รุ่น :</label>
                    <input type="text" name="brand" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="user">ผู้ใช้งาน :</label>
                    <input type="text" name="user" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="location">ที่ตั้งปัจจุบัน :</label>
                    <input type="text" name="location" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="state">สถานะ :</label>
                    <select name="state" class="form-control" required>
                        <option value=""></option>
                        <option value="พร้อมใช้งาน">พร้อมใช้งาน</option>
                        <option value="ส่งซ่อม">ส่งซ่อม</option>
                        <option value="ชำรุด">ชำรุด</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="serial">Serial Number</label>
                    <input type="text" name="serial" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="note">หมายเหตุ</label>
                    <textarea name="note" class="form-control"></textarea>
                </div>
                <div class="my-3">
                    <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                </div>
            </form>
        </div>

    </div>
</body>

</html>