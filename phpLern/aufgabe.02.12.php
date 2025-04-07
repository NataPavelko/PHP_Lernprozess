<?php

echo "Zahle:";
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
echo $i," "; 
}
echo "<br> Quadrat: ";
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
$q=$i*$i;
echo $q," ";
}
echo "<br> Kubik: ";
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
$k=$i*$i*$i;
echo $k," ";
}
echo "<br>";
$datum=mktime(0,0,0,2,20,1999);
echo "Datum: ";
echo date("j.m.Y", $datum);
$W=date("W", $datum);
$z=date("z", $datum);
echo "<br>";
echo "Woche  N: ", $W," Tag des Jahres: ", $z;
echo "<br> Heute: ";
$heute=date("d.m.Y");
echo $heute;
$anz=date("z");
$dec=date("t");
$offset=date("Z");
$schalt=date("L");
if($schalt=="1")
$schalt="Schaltjahr";
else 
$schalt= "kein Schaltjahr";
$sw=date("I");
if($sw=="1")
$sw="Sommerzeit";
else 
$sw= "Winterzeit";
echo "<br/>";
$weih=mktime(0,0,0,12,24,2024);
$anz2=date("z", $weih);
$ehu=$anz2-$anz;
echo "Anzahl der Tage bis Weihnachten: ";
echo $ehu;
echo "<br/>";
echo "Anzahl der Tage des Monats ";
echo $dec;
echo "<br/>";
echo "Schaltjahr oder keines: ";
echo $schalt;
echo "<br/>";
echo "Offset zur GMT in Stunden: ";
echo $sw;
echo "<br/>";
echo "Offset zur GMT in Stunden ";
echo $offset;
?>