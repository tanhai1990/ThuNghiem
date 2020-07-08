<?php
//Xóa một phần tử trong mảng
$arr = array(1, 2, 3, 4, 5);
unset($arr[2]);
foreach($arr as $a){
    echo $a." ";
}

?>