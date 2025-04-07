<?php
echo "</br>";
for ($i = 1; $i <= 255; $i++) {
$bin=decbin($i);
$hex=dechex($i);
$oct=decoct($i);
$ascii=chr($i);
echo "Decimal: ", $i, " Binär: ", $bin, " Hexadecimal: ",$hex, " Oktal: ", $oct, "ASCII-Zeichen ", $ascii, " </br>";
}



?>