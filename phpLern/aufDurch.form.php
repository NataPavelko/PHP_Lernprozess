<form>
<label for="kapital">Anlagebetrag: </label>
<input type="number" name="kapital" required min="1">
<label for="stehzeit">Stehzeit: </label>
<input type="number" name="stehzeit" required min="1">
<label for="zinssatz">Zinssatz: </label>
<input type="number" name="zinssatz" required min="=0.5" max="10">
<input type="submit">
</form>
<?php
if(isset($_GET["kapital"])){
$kap=$_GET["kapital"];
$zeit=$_GET["stehzeit"];
$zins=$_GET["zinssatz"];
$z=$zins/100.00;

for($i= 1;$i<=$zeit;$i++){
   echo"$i ";
    $zinsen=$z*$kap;
    $erg=$kap+$zinsen;
    echo " " .number_format($kap,2) ."";
    $kap=$erg;
   
echo " " .number_format($zinsen,2) ."";
echo " " .number_format($kap,2) ."";
echo "<br>";

}



}



?>