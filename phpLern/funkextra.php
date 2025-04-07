<?php

define("Anzahl", 10);

srand ( (double)microtime () * 1000000 );

for ($i=0; $i<Anzahl;$i++) {

$z = machen();

echo $z."<br>";
}
function machen() {

$s="";

$AnzW = rand(3,8);

for ($i=0;$i<$AnzW;$i++)

$s =$s.tuwas()."#";

return $s;
}
function tuwas() {

$w="";

$max = rand(3,12);

for ($i=1;$i<=$max;$i++) {

$wert = rand (97,122);

$w=$w.chr($wert);

}

return $w;
}
?>