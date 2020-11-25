<html>
   
   <head>
      <title>Xóa phần tử mảng trong PHP</title>
   </head>
   <body>
   
       <?php
            $x = array(0, 1, 2, 3, 4);  
			var_dump($x);  
			unset($x[3]);  
			$x = array_values($x);  
			echo '';  
			var_dump($x); 
       ?>
       
   </body>
</html>