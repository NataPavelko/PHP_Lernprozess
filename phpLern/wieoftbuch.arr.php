<form>
<label for="wort">Ihres Wort: </label>
<input type="text" name="wort" required>
<input type="submit">
</form>

<?php
if(isset($_GET["wort"])){
$wort=$_GET["wort"];
var_dump($wort);
$arr=str_split($wort, length:1);
var_dump(array_count_values($arr));
}