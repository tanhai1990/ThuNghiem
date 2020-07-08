<?php
$n=100;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=1;$i<=$n;$i++){
    for($k=$n;$k>=$i;$k--){
        echo "*";
    }
    echo "<br>";
}
?>