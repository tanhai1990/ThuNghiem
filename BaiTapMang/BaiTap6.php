<html>
   
   <head>
      <title>Decode JSON string trong PHP</title>
   </head>
   <body>
   
       <?php
        function ham_xu_ly($value,$key)  
		{  
		  echo "$key : $value"."<br>";  
		}  
		$a = '{"Truong": "Dai Hoc Bon Ba",  
                "Khoa": "Tieng Lao nang cao",  
                "Nganh":  
                {   
                "Nganh 1": "Ngu Phap tieng Lao",
                "Nganh 2": "Giao tiep tieng Lao"
                }  
            }';  
		$j1 = json_decode($a,true);  
		array_walk_recursive($j1,"ham_xu_ly");
       ?>
       
   </body>
</html>