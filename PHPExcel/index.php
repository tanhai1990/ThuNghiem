<?php
require "DBConnect/Connect.php";
require "Classes/PHPExcel.php";

if(isset($_POST["btnGui"])){
    $file = $_FILES['file']['tmp_name'];

    $ObjReader = PHPExcel_IOFactory::createReaderForFile($file);

    $objReader->setLoadSheetsOnly('10A1');
    


    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="btnGui">Import</button>
    </form>
</body>
</html>