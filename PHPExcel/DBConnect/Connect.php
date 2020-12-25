<?php
$ServerName = "localhost";
$UserName = "root";
$PassWord = "";
$DBName = "dbexcel";

$Connect = mysqli_connect($ServerName, $UserName, $PassWord, $DBName);

if(!$Connect){
    die("Connection failed: ".mysqli_connect_error());
}


?>