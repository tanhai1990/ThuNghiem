<?php
require "dbconnect.php";
$dt = new Database;
?>
<?php
if(isset($_POST["insert"])){
    $TenLop = $_POST["txtTenLop"];
    $dt->Command("INSERT INTO lop VALUES(null,'$TenLop')");
    header('location:lop.php');
    echo "Thanh cong";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table style="width: 400px;">
        <tr>
            <th>STT</th>
            <th>Têp lớp</th>
            <th>Xử lý</th>
        </tr>
        <!-- Bảng lớp -->
        <?php
        $dt->Select("SELECT * FROM lop");
        $i = 0;
        while($rowLop = $dt->Fetch()){
            $i++;
        ?>
        <tr>
            <td><?php echo  $i; ?></td>
            <td><?php echo  $rowLop['TenLop']; ?></td>
            <td><a href="xoa.php?IDLop=<?php echo  $rowLop['IDLop'];?>">Xóa</a> | 
            <a href="sua.php?IDLop=<?php echo  $rowLop['IDLop'];?>">Sửa</a></td>
        </tr>
        <?php
        }
        ?>
        <!-- End Bảng lớp -->
    </table>
    <br>
    <br>
    <form action="" method="post">
        <label for="txtTenLop">Tên lớp:</label>
        <input type="text" name="txtTenLop" placeholder="Nhập tên lớp"/><br>
        <input type="submit" name="insert" value="Thêm mới"/>
    </form>
</body>
</html>