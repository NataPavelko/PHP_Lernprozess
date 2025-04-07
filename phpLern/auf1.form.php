<form>
<label for="menge">Treibstoffmenge:</label>
<input type="nummer" name="menge" max="1000" required>
<label for="letzt">KM-Stand beim letzten Tanken:</label>
<input type="nummer" name="letzt" max="1000" required>
<label for="auft">KM-Stand beim Auftanken:</label>
<input type="nummer" name="auft" max="1000" required>
<input type="submit" value="Rechnen">
</form>
<?php
if(isset($_GET["menge"])){
    $menge=$_GET["menge"];
    $letz=$_GET["letzt"];
    $auft=$_GET["auft"];
    $erg=$menge*100/($letz-$auft);
    echo "Ergebnis: $erg";
}

?>