<?php
//Import dữ liệu học sinh vào bảng học sinh trong MySQL
require "./Classes/PHPExcel.php";
require "./DBConnect/Connect.php";

if(isset($_POST["btnGui"])){
    $file = $_FILES['file']['tmp_name'];

    $objReader = PHPExcel_IOFactory::createReaderForFile($file);
    $objReader->setLoadSheetsOnly('Lop10A1');

    $objExcel = $objReader->load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
    print_r($sheetData);

    $HighestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
    echo $HighestRow;
    
    for($row=2;$row<=$HighestRow;$row++){
        $HoTen = $sheetData[$row]['A'];
        $NgaySinh = $sheetData[$row]['B'];
        $NgaySinh = date("Y-m-d", strtotime($NgaySinh));
        $GioiTinh = $sheetData[$row]['C'];
        $DiaChi = $sheetData[$row]['D'];

        $sql = "
            INSERT INTO hocsinh(HoTen, NgaySinh, GioiTinh, DiaChi)
            VALUES('$HoTen', '$NgaySinh', $GioiTinh, '$DiaChi')
        ";
        echo $sql;
        $mysqli->query($sql);
    }
    echo 'Inserted';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Students</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <button type="submit" name="btnGui">Import</button>
    </form>
</body>
</html>