<?php
require "dbconnect.php";
$dt = new Database;
?>

<?php
if(isset($_GET['IDLop'])){
    echo "thanh cong";
    $IDLop = $_GET['IDLop'];
    $dt->Command("DELETE FROM lop WHERE IDLop='$IDLop'");
    header('location:lop.php');
    
}

?>

<p>hello</p>