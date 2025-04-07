<?php

$jahr=1824;
echo schalter($jahr);



function schalter($j) {
    if($j%4== 0 || $j%100==0){
    $erg="True";
}
else
$erg="False";
return $erg;
}












?>