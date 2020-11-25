<html>
   
   <head>
      <title>Lấy tên file trong PHP</title>
   </head>
   <body>
   
       <?php
         $tenFileHienTai = basename($_SERVER['PHP_SELF']);  
         echo "Tên file hiện tại là: $tenFileHienTai";
       ?>
       
   </body>
</html>