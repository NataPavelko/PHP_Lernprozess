<?php
$host="localhost";
$user="root";
$pass= "";
$db="nordwind";
$con=mysqli_connect($host,$user,$pass, $db);




$sql=("SELECT Firma, Land FROM kunden;");
$result=mysqli_query( $con,$sql);

while($zeile=mysqli_fetch_assoc($result)){
foreach($zeile as $key=>$value){
    echo "$value ";
  
}

echo "<br>";


}














?>