<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vị trí javascript trong HTML</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var D = new Date();
        var NamSinh, NamHienTai;
        NamHienTai = D.getFullYear(); // Lưu năm hiện tại vào biến
        alert(NamHienTai)
        NamSinh = prompt("Bạn sinh năm bao nhiêu ? : ","");
        alert("Tuổi của bạn bây giờ là : " + (NamHienTai-NamSinh));
    </script>
</head>
<body>
</body>
</html>