<form action="" method="get">
    <label for="date">Tag:</label>
  <input type="number" id="tag" name="tag" min="1" max="31" required>
  <input type="number" id="monat" name="monat" min="1" max="12" required>
  <input type="number" id="jahr" name="jahr" min="1900" max="2050" required>
  <input type="submit">
</form>
<?php
if(isset($_GET["tag"])){
    $tag = $_GET["tag"];
    $monat = $_GET["monat"];
    $jahr = $_GET["jahr"];
    echo "Ihre Eingabe: $tag.$monat.$jahr";
    echo "<br>";
$datum=mktime(0,0,0,$tag,$monat,$jahr);
    $W=date("W", timestamp: $datum);
    $z=date("z", $datum);
echo "Woche  N:  $W, Tag des Jahres:  $z";
echo "<br> ";
$anz=date("z", $datum);
$dec=date("t", $datum);
$offset=date("Z", $datum);
$schalt=date("L", $datum);
if($schalt=="1")
$schalt="Schaltjahr";
else 
$schalt= "kein Schaltjahr";
$sw=date("I", $datum);
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
}
?>