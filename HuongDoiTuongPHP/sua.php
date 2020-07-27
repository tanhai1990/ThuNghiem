<?php
require "dbconnect.php";
$dt = new Database;

if(isset($_GET['IDLop'])){
    $IDLop = $_GET['IDLop'];
    $dt->Select("SELECT * FROM lop WHERE IDLop='$IDLop'");
    $rowLop = $dt->Fetch();
}
?>
<!-- Sửa dữ liệu -->
<?php
if(isset($_POST["btnSua"])){
    $TenLop = $_POST["txtTenLop"];
    $IDLop = $_GET["IDLop"];
    $dt->Command("UPDATE lop SET TenLop='$TenLop' WHERE IDLop='$IDLop'");
    header("location:lop.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="Sua">Tên lớp:</label>
        <input type="text" name="txtTenLop" value="<?php echo $rowLop['TenLop']; ?>">
        <input type="submit" name="btnSua" value="Chấp nhận"/>
    </form>
</body>
</html>