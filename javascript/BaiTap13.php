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
        function getValue(){
            var name = prompt("Enter your name: ");
            var age = prompt("Enter your age: ");
            document.write("You have entered: "+name+" and your age: "+age);
        }
    </script>
</head>
<body>
    <p>Click the following button to see the result</p>
    <form action="">
        <input type="button" value="Click Me" onclick="getValue()">
    </form>
</body>
</html>