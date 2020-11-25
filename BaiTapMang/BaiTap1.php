<html>
   
   <head>
      <title>Khai báo và tạo mảng trong PHP</title>
   </head>
   <body>
   
       <?php
            //khai báo và tạo mảng
            $color = array('white', 'green', 'red', 'blue', 'black');
            
            //sử dụng vòng lặp foreach để lặp qua các phần tử mảng
		    foreach ($color as $c)  
			{  
			  echo "$c, ";  
			}  
			
			//sắp xếp các phần tử mảng
			sort($color);  
			
			//in mảng dưới dạng list
			echo "<ul>";  
			foreach ($color as $y)  
			{  
			  echo "<li>$y</li>";  
			}  
			echo "</ul>";
       ?>
       
   </body>
</html>