<?php
echo intervall(3,7);


function intervall($a,$b){
    $c=0;
    for($i= $a;$i<=$b;$i++){
        $c=$c+$i;
    }
     return $c;
}