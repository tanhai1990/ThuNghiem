<pre> 
<?php
$nameFile = $_FILES['FileName']['name'];
$typeFile = $_FILES['FileName']['type'];
$sizeFile = $_FILES['FileName']['size'];

echo $typeFile;

move_uploaded_file($_FILES['FileName']['tmp_name'], "../upload/$nameFile");
?>
</pre> 