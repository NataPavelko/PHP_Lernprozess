<?php
$array1=array("1","8","8","4","7","5") ;
echo arr_numeric($array1);

function arr_numeric($arr){
    for($i= 0;$i<count($arr);$i++){
    $a=$arr[$i];

if(is_numeric($a)==0){
$erg="False!";
    break;
     }
    else 
$erg="True!";
   
}
return $erg;
}