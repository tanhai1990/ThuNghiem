<html>
   
   <head>
      <title>Tạo mảng liên hợp trong PHP</title>
   </head>
   <body>
   
       <?php
            //khai báo và tạo mảng liên hợp
            $mang_lien_hop = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
			"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
			"Finland"=>"Helsinki", "France" => "Paris",  
			"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
			"Germany" => "Berlin", "Greece" => "Athens",  
			"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
			"Austria" => "Vienna", "Poland"=>"Warsaw");  
			
			//sắp xếp mảng liên hợp
			asort($mang_lien_hop); 
			
			//lặp qua các phần tử mảng 
			foreach($mang_lien_hop as $country => $capital)  
			{  
			  echo "Thủ đô của $country là $capital"."<br>" ;  
			}  
       ?>
       
   </body>
</html>

