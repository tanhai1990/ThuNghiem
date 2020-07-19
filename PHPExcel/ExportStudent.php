<?php

require "./Classes/PHPExcel.php";
require "./DBConnect/Connect.php";

if(isset($_POST["btnExport"])){
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel->getActiveSheet()->setTitle('Lop10A1');

    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount,'Họ và tên');
    $sheet->setCellValue('B'.$rowCount,'Ngày Sinh');
    $sheet->setCellValue('C'.$rowCount,'Giới Tính');
    $sheet->setCellValue('D'.$rowCount,'Địa Chỉ');

    $result = $mysqli->query(
        "SELECT HoTen, NgaySinh, GioiTinh, DiaChi FROM hocsinh"
    );

    while($row = mysqli_fetch_array($result)){
        $rowCount++;
        $sheet->setCellValue('A'.$rowCount,$row['HoTen']);
        $sheet->setCellValue('B'.$rowCount,$row['NgaySinh']);
        $sheet->setCellValue('C'.$rowCount,$row['GioiTinh']);
        $sheet->setCellValue('D'.$rowCount,$row['DiaChi']);
    }

    $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = 'ExportData.xlsx';
    $objWriter->save($filename);
    
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    header('Content-Length: '.filesize($filename));
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');
    readfile($filename);
    return;
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data</title>
</head>
<body>
    <form action="" method="post">
        <button name="btnExport" type="submit">Export</button>
    </form>
</body>
</html>