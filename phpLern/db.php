<?php

$host="localhost";
$user="root";
$pass= "";
$db="nordwind";

$con=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT kontaktperson, Firma
FROM `kunden`
where Kontaktperson like '%Maria%'";
$result=mysqli_query($con,$sql);

while($zeile=mysqli_fetch_assoc($result)){
    

    foreach($zeile as $key=>$value){
        echo  "$key : $value <br>";
    }
}
  echo "<hr>";


