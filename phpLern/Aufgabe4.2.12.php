<?php
$datum=date("d.m.Y");

$zeit=date("H.i");
echo "Zeit: ", $zeit;
echo "<br/>";
$jetzt=date("H");
if ($jetzt<12) {
    $grus="Guten Morgen ";
}
else if ($jetzt<17) {
    $grus= "Guten Tag ";
}
else if ($jetzt< 00) {
    $grus= "Guten Abend ";
}
echo "<br/>", $grus, ", Nataliia!";
echo date(d)
?>