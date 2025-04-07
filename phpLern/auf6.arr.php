<?php
echo "<table border>";
for($i= 0; $i<100; $i++){
    $arr[]=rand(1,100);
echo"$arr[$i] ";
}

sort($arr);
echo "<table border><tr>";
for($i= 0; $i< 100; $i++){
echo"<td> $arr[$i] </td>";
if($i%2== 0){

}

}
echo"Durchschnitt: " .array_sum($arr)/count($arr);