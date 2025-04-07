<?php

$a=15;
$b= 10;
echo rest($a, $b);

function rest($a, $b) {
    $erg=$a/$b;
     $rest=$a%$b;
     $erg1=0;
    $erg1=floor($a/$b);
    if ($b== 0) {
        return "Fehler!";
    }
    return "Der Rest ist ".$rest. "Erg: " .$erg1;

}
?>
