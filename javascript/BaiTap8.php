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
        function getConfirmation(){
            var retVal = confirm("Do you want to continue?");
            if(retVal==true){
                document.write("User wants to continue!");
                return true;
            }
            else{
                document.write("User does not want to be continue!");
                return false;
            }
        }
    </script>
</head>
<body>
    <p>Click the following button to see the result</p>
    <form action="">
        <input type="button" value="Click Me" onclick="getConfirmation()">
    </form>
</body>
</html>