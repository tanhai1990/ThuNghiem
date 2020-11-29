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
    <script  type="text/javascript">
        var answer1 = "It's alright";
        var answer2 = "He is called 'Johnny'";
        var answer3 = 'He is called "Johnny"';
        document.getElementById('demo').innerHTML =  answer1 + "<br>" + answer2 +"<br>"+ answer3;
    </script>

</head>
<body>
    <p id="demo"></p>
    <script  type="text/javascript">
        var answer1 = "It's alright";
        var answer2 = "He is called 'Johnny'";
        var answer3 = 'He is called "Johnny"';
        document.getElementById('demo').innerHTML =  answer1 + "<br>" + answer2 +"<br>"+ answer3;
    </script>
</body>
</html>