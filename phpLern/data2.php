<?php
echo gewicht(2000, "k")." Kilogramm <br> "; 
echo gewicht(2000, "d")." Dekagramm <br> "; 
echo gewicht(2000, "p")." Pfund <br> "; 
echo gewicht(2000, "u");

function gewicht($x, $y) {
    if($y=="k"){
        $erg=$x/1000;
        return $erg;
    }
    else if($y== "d"){
        $erg=$x/10;
        return $erg;
    }
    else if($y== "p"){
    $erg=$x/500;
    return $erg;
}
else {
return "#Unbekannte Einheit";
}
}
