<?php
require('dbconnect.php');
$sql = "SELECT * FROM user";
$result = mysqli_query($con, $sql); 

$count = mysqli_num_rows($result); 
$order = 1; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การตั้งค่า</title>
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
                <a class="active" href="setting.php">การตั้งค่า</a>
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
            <h2 style="color:#0972ce">การตั้งค่า</h2>
            <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>ผู้ใช้งาน</th>
          <th>แก้ไขผู้ใช้งาน</th>
          <th>ลบผู้ใช้งาน</th>

        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $order++; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><a href="edituserform.php?id=<?php echo $row["id"] ?>"class="btn btn-success">แก้ไข</a></td>
            <td><a href="deleteuser.php?id=<?php echo $row["id"] ?>"class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="col-6">
    <a href="insertuser.php" class="btn btn-info">เพิ่มผู้ใช้งาน</a>
        </div>
        </div>
        
    </div>
</body>

</html>