<?php
function KiemTraFile($fileExt){
    $permited = array('jpg','png','gif','jpeg');
    foreach($permited as $per){
        if($per==$fileExt){
            return true;
            break;
        }
    }
    return false;
}

$fileExt = "jpg";

if(KiemTraFile($fileExt)){
    echo $fileExt;
} else {
    echo "false";
}

?>