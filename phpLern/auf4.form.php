<form action="" method="get">
    <label for="tag">Tag:</label>
  <input type="number" id="tag" name="tag" min="1" max="31" required>
  <label for="monat">Monat:</label>
  <input type="number" id="monat" name="monat" min="1" max="12" required>
  <label for="jahr">Jahr:</label>
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
    $test=checkdate($monat, $tag, $jahr);
    if($test===true){
        echo "gültiges Datum";
}
else{
    echo "ungültiges Datum";
}}
?>