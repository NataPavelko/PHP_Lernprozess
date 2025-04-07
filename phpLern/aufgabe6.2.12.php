<?php
$wurf=$i=$z1=$z2=$z3=$z4=$z5=$z6=0;

for($i= 1;$i<=100;$i++){

    $wurf=rand(1,6);
    if($wurf== 1)
    $z1++;
else if($wurf== 2)
$z2++;
else if($wurf== 3)
$z3++;
else if($wurf== 4)
$z4++;
else if($wurf== 5)
$z5++;
else if($wurf== 6)
$z6++;
}
echo " 1 = ", $z1;
echo "; 2 = ", $z2;
echo "; 3 = ", $z3;
echo "; 4 = ", $z4;
echo "; 5 = ", $z5;
echo "; 6 = ", $z6;



?>