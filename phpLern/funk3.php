<?php
$arr=array("9","8","8","7","6","5") ;
echo avg($arr);


function avg($arr) {
    $sum=array_sum($arr);
    $erg=$sum/count($arr);
return $erg;

}
