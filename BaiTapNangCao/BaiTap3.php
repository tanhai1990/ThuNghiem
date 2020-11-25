<html>
   
   <head>
      <title>Email Validation trong PHP</title>
   </head>
   <body>
   
       <?php
        // truyền vào địa chỉ email hợp lệ/không hợp lệ
		$email = "mail@example.com";  
		if (filter_var($email, FILTER_VALIDATE_EMAIL))   
		{  
			 echo '"' . $email . '" = Hợp lệ';  
		}  
		else   
		{  
			 echo '"' . $email . '" = Không hợp lệ';  
		}  
       ?>
       
   </body>
</html>