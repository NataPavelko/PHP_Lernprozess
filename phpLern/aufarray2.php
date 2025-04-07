<?php

$arr1=array("Hans","Der Hund","Mia","Der Regen");
$arr2=array("singt","bellt","tanzt","tropft");
$arr3=array("falsch","laut","zauberhaft","langsam");

echo "" .$arr1[rand(0,count($arr1)-1)] ." ".$arr2[rand(0,count($arr2)-1)] ." ".$arr3[rand(0, count($arr3)-1)] .".";


?>