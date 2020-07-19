<?php
require "./DBConnect/Connect.php";
require "./Classes/PHPExcel.php";

if(isset($_POST["btnExport"])){
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel->getActiveSheet()->setTitle('10A1');

    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount,'Họ tên');
    $sheet->setCellValue('B'.$rowCount,'Toán');
    $sheet->setCellValue('C'.$rowCount,'Lý');
    $sheet->setCellValue('D'.$rowCount,'Hóa');

    $result = $mysqli->query(
        "SELECT TenHocVien, DiemToan, DiemLy, DiemHoa 
        FROM diem INNER JOIN lop ON lop.IDLop = diem.IDLop WHERE lop.TenLop = '10A1'"
    );

    while($row = mysqli_fetch_array($result)){
        $rowCount++;
        $sheet->setCellValue('A'.$rowCount,$row['TenHocVien']);
        $sheet->setCellValue('B'.$rowCount,$row['DiemToan']);
        $sheet->setCellValue('C'.$rowCount,$row['DiemLy']);
        $sheet->setCellValue('D'.$rowCount,$row['DiemHoa']);
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