<form action="">
    <label for="zahl">Ihre Zahl: </label>
    <input type="number" name="zahl" min="1" max="999" >
    <input type="submit">
</form>


<?php

if(isset($_GET["zahl"])){

    $zahl=$_GET["zahl"];
$arr=str_split($zahl);

$arr2[0]="Zehn";
$arr2[1]= "Elf";
$arr2[2]= "Zwölf";
$arr2[3]= "Dreizehn";
$arr2[4]= "Vierzehn";
$arr2[5]= "Fünfzehn";
$arr2[6]= "Sechszehn";
$arr2[7]= "Siebzehn";
$arr2[8]= "Achzehn";
$arr2[9]= "Neunzehn";

$arr1[0]="Null";
$arr1[1]= "Einz";
$arr1[2]= "Zwei";
$arr1[3]= "Drei";
$arr1[4]= "Vier";
$arr1[5]= "Fünf";
$arr1[6]= "Sechs";
$arr1[7]= "Sieben";
$arr1[8]= "Acht";
$arr1[9]= "Neun";

//var_dump($arr);
$text="";

for($i= 0;$i<count($arr);$i++){
 $text.=$arr1[$arr[$i]];
 $text.="-";
}
echo "***".trim($text,"-")."***";

}

else if(count($arr)==2){
$text="";

for($i= 0;$i<count($arr);$i++){
 $text.=$arr2[$zahl];
 $text.="-";
}
echo "***".trim($text,"-")."***";

}
/*
if($arr<20 && $arr< 9){
for($i= 0;$i<count($arr);$i++){
 $text.=$arr2[$arr[$i]];
 $text.="-";
}}
echo "***".trim($text,"-")."***";

*/







