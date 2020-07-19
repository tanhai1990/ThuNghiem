<?php

$mysqli = mysqli_connect('localhost','root','','exceldemodb');
$mysqli->set_charset('utf8');
if(mysqli_connect_error()){
    echo "Connect failed: ".mysqli_connect_error();
    exit();
}















?>