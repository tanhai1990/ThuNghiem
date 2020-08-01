<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function Bark(name, weight){
            if(weight>20){
                document.write(name+" says WOOF WOOF<br>");
            }
            else{
                document.write(name+" says woof woof <br>");
            }
        }
        Bark("rover", 23);
        Bark("spot", 13);
        Bark("spike", 53);
        Bark("anna", "20");
        Bark("anna", 0, 0);
    </script>
</head>
<body>
    
</body>
</html>