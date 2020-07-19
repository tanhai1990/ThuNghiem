<?php
require "./DBConnect/Connect.php";
require "./Classes/PHPExcel.php";

if(isset($_POST["btnGui"])){
    $file = $_FILES['file']['tmp_name'];

    $objReader = PHPExcel_IOFactory::createReaderForFile($file);
    $listWorkSheets = $objReader->listWorkSheetNames($file);
    print_r($listWorkSheets);

    foreach($listWorkSheets as $name){
        $sql = "
            INSERT INTO lop(TenLop) 
            VALUES('$name')
        ";
        $mysqli->query($sql);
        $IDLop = $mysqli->insert_id;

        $objReader->setLoadSheetsOnly($name);

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
        print_r($sheetData);

        $HighestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        
        for($row=2;$row<=$HighestRow;$row++){
            $name = $sheetData[$row]['A'];
            $DiemToan = $sheetData[$row]['B'];
            $DiemLy = $sheetData[$row]['C'];
            $DiemHoa = $sheetData[$row]['D'];

            $sql = "
                INSERT INTO diem(IDLop, TenHocVien, DiemToan, DiemLy, DiemHoa)
                VALUES($IDLop, '$name', $DiemToan, $DiemLy, $DiemHoa);
            ";
            $mysqli->query($sql);
        }
    }
    echo "Successfully";

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