<?php
$min=$max= $zahl=rand(1,100);
for ($i = 0; $i < 10; $i++) {
$zahl=rand(1,100);
echo $zahl," ";
if($min>$zahl){
    $min=$zahl;
}
else if($max<$zahl){
    $max=$zahl;
}
}
echo"Min: " .$min, "Max: ".$max;
?>