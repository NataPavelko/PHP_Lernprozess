<?php
$host="localhost";
$user="root";
$pass= "";
$db="nordwind";

$con=mysqli_connect($host,$user,$pass,$db);

$sql="SELECT 'Gesamt', sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as Gesamtumsatz
FROM bestellungendetails, artikel
where bestellungendetails.ArtikelNr=artikel.ArtikelID";

echo"<table border>";
echo "<tr><th>Umsatz pro...</th><th>Summe</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}
echo "</table>";

$sql="SELECT kunden.Firma, sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as Gesamtumsatz
from kunden, bestellungen, bestellungendetails, artikel
WHERE bestellungendetails.ArtikelNr=artikel.ArtikelID
and bestellungendetails.BestellNr=bestellungen.BestellID
and bestellungen.KundenNr=kunden.KundenID
GROUP by 1";
echo "<br>";
echo"<table border>";
echo "<tr><th>Firma</th><th>Umsatz</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}

$sql="SELECT kunden.Land, sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as Gesamtumsatz
from kunden, bestellungen, bestellungendetails, artikel
WHERE bestellungendetails.ArtikelNr=artikel.ArtikelID
and bestellungendetails.BestellNr=bestellungen.BestellID
and bestellungen.KundenNr=kunden.KundenID
GROUP by 1";

echo "<br>";

echo"<table border>";
echo "<tr><th>Land</th><th>Umsatz</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}

$sql="SELECT artikel.Artikelname, sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as Gesamtumsatz
from kunden, bestellungen, bestellungendetails, artikel
WHERE bestellungendetails.ArtikelNr=artikel.ArtikelID
and bestellungendetails.BestellNr=bestellungen.BestellID
and bestellungen.KundenNr=kunden.KundenID
GROUP by 1";

echo "<br>";

echo"<table border>";
echo "<tr><th>Artikel</th><th>Umsatz</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}

$sql="SELECT artikelkategorien.Kategoriename, sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as Gesamtumsatz
from kunden, bestellungen, bestellungendetails, artikel, artikelkategorien
WHERE bestellungendetails.ArtikelNr=artikel.ArtikelID
and artikel.KategorieNr=artikelkategorien.KategorieID
and bestellungendetails.BestellNr=bestellungen.BestellID
and bestellungen.KundenNr=kunden.KundenID
GROUP by 1";

echo "<br>";

echo"<table border>";
echo "<tr><th>Kategorie</th><th>Umsatz</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}
echo "<br>";
$sql="SELECT lieferanten.Firma, sum(bestellungendetails.Anzahl*artikel.Einzelpreis) as umsatz
from lieferanten, bestellungendetails, artikel
WHERE bestellungendetails.ArtikelNr=artikel.ArtikelID
and lieferanten.LieferantenID=artikel.LieferantenNr
GROUP by 1;";


echo"<table border>";
echo "<tr><th>Lieferanten</th><th>Umsatz</th></tr>";
$result=mysqli_query($con,$sql);
while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value </td>";
    }
   echo "</tr>";
}



echo "</table>";






/*
$result=mysqli_query($con,$sql);
$zeile=mysqli_fetch_assoc($result);

while($zeile=mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($zeile as $value){
        echo  "<td>$value</td>";
    }
    }
*/



?>