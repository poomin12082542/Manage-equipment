<?php
require('dbconnect.php');
$data = $_POST["data"];
$sql = "SELECT * FROM items WHERE number LIKE '%$data%' OR type LIKE '%$data%' OR brand LIKE '%$data%' OR user LIKE '%$data%' OR location LIKE '%$data%' OR status LIKE '%$data%' OR serial LIKE '%$data%'";
$result = mysqli_query($con, $sql); 

$count = mysqli_num_rows($result); 
$order = 1; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหารายการครุภัณฑ์</title>
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
                <a class="active" href="search.php">ค้นหารายการครุภัณฑ์</a>
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
            <h2>ค้นหารายการครุภัณฑ์</h2>
            <?php
    ?>
    <h1 class="text-center mt-3"></h1>
    <form action="searchdata.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกข้อมูลที่ต้องการค้นหา" class="form-control" name="data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="ค้นหา" class="btn btn-info">
        </div>
      </div>
    </form>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>เลขครุภัณฑ์</th>
          <th>ประเภทครุภัณฑ์</th>
          <th>ยี่ห้อ/รุ่น</th>
          <th>ผู้ใช้งาน</th>
          <th>ที่ตั้งปัจจุบัน</th>
          <th>สถานะ</th>
          <th>Serial Number</th>
          <th>หมายเหตุ</th>
          <th>แก้ไขข้อมูล</th>
          <th>ลบข้อมูล</th>

        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $order++; ?></td>
            <td><?php echo $row["number"]; ?></td>
            <td><?php echo $row["type"]; ?></td>
            <td><?php echo $row["brand"]; ?></td>
            <td><?php echo $row["user"]; ?></td>
            <td><?php echo $row["location"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
            <td><?php echo $row["serial"]; ?></td>
            <td><?php echo $row["note"]; ?></td>
            <td><a href="editform.php?id=<?php echo $row["id"] ?>"class="btn btn-success">แก้ไข</a></td>
            <td><a href="deletedata.php?id=<?php echo $row["id"] ?>"class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></td>


          </tr>
        <?php } ?>
      </tbody>
    </table>



        </div>
    </div>
</body>

</html>