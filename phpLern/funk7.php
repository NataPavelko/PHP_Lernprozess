<?php
$mytext="hfzghgdfdfmcxyz";
$mykey=3;
echo Caesar($mytext, $mykey);



function Caesar($text, $key) {
$arr=str_split($text);
$erg="";
for ($i= 0; $i<count($arr); $i++){
    $b=$arr[$i];
    $w=ord($b);
    if($w>= 97&& $w<= 122){
     $z=$w+$key;
     if($z>122){
        $z=$z-26;
     }
  $erg.=chr($z);
}
else{
     $z=$w+25;
  $erg=$erg.chr($z);

}
}
return $erg;
}