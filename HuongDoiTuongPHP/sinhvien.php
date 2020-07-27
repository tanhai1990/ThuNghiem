<?php
require 'dbconnect.php';
$db = new Database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hướng đối tượng PHP</title>
    <style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <table style="width:800px;">
        <tr>
            <th>IDSinhVien</th>
            <th>IDLop</th>
            <th>Họ Tên</th>
            <th>Địa chỉ</th>
            <th>Ngày Sinh</th>
            <th>Số Điện Thoại</th>
        </tr>
        <!-- Hiển thị bảng sinh viên -->
        <?php
        $db->Select("SELECT * FROM sinhvien");
        while($rowSinhvien = $db->Fetch()){
        ?>
        <tr>
            <td><?php echo $rowSinhvien['IDSinhVien']; ?></td>
            <td><?php echo $rowSinhvien['IDLop']; ?></td>
            <td><?php echo $rowSinhvien['TenSinhVien']; ?></td>
            <td><?php echo $rowSinhvien['DiaChi']; ?></td>
            <td><?php echo $rowSinhvien['NgaySinh']; ?></td>
            <td><?php echo $rowSinhvien['SoDienThoai']; ?></td>
        </tr>
        <?php
        }
        ?>
        <!-- End Hiển thị bảng sinh viên -->
    </table>
</body>
</html>


   