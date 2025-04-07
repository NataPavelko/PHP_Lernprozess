<?php
$host="localhost";
$user="root";
$pass= "";
$db="nordwind";

$con=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT kunden.Firma, kunden.Telefon, 'k'
from kunden
UNION
SELECT lieferanten.Firma, lieferanten.Telefon, 'l'
from lieferanten
order by 1";

echo"<table border>";
echo "<tr><th>Name</th><th>telefon</th><th>art</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}
echo "</table>";






?>