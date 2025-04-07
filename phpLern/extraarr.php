<form action="">
    <label for="zahl">Ihre Zahl: </label>
    <input type="number" name="zahl" min="1" max="999" >
    <input type="submit">
</form>


<?php

if(isset($_GET["zahl"])){

    $zahl=$_GET["zahl"];
$arr=str_split($zahl);



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
/*
if($arr<20 && $arr< 9){
for($i= 0;$i<count($arr);$i++){
 $text.=$arr2[$arr[$i]];
 $text.="-";
}}
echo "***".trim($text,"-")."***";

*/







