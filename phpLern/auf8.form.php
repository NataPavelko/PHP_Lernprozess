<?php
$a=10;
$s=$V=$Vmax=$Smax=0;
$l=0.1;
while($V>=$Vmax){
$V=($a-2*$s)*($a-2*$s)*$s;
echo "bei Schnittlänge $s aktuelles Volumen: $V <br>";
if($Vmax < $V){ 
$Vmax = $V; 
$Smax = $s; 
} 
$s = $s + $l;
}
echo"Maximales Volumen von $Vmax bei $Smax";

?>