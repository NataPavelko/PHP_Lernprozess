<form>
    <label for="satz">Ihrer Satz</label>
    <input type="text" name="satz" required>
    <input type="submit">
</form>

<?php
if(isset($_GET["satz"])){
    $satz=$_GET["satz"];
    $arr=explode(" ",$satz);
    echo "Ihrer Satz: $satz";
    $neu = array_reverse($arr);
    var_dump($neu);
}