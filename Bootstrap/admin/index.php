<?php
if(isset($_POST["btnLogin"])){
    $UserName = $_POST["UserName"];
    $PassWord = $_POST["PassWord"];
    echo "UserName:".$UserName."PassWord".$PassWord;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">   
    <style>
        .col-lg-5{
            background-color: #c8c8c8;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3 style="text-align: center; font-family:Time New Romance; font-weight: bold">ĐĂNG NHẬP HỆ THỐNG</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="UserName">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="UserName" placeholder="Enter Email" name="UserName">
                    </div>
                    <div class="form-group">
                        <label for="PassWord">Mật khẩu:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter PassWord" name="PassWord">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Đăng nhập</button>
                    <button type="submit" class="btn btn-primary" name="btnCancel">Cancel</button>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>
