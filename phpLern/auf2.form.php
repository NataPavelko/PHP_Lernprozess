<form>
<label for="login">Login:</label>
<input type="text" name="login" required ><br>
<label for="passwort">Passwort::</label>
<input type="password" name="passwort" required><br>
<label for="alter">Alter:</label>
<input type="nummer" name="alter" min="1" max="100" required><br>
<input type="submit">
</form>
<?php
if(isset($_GET["login"])){
$log=$_GET["login"];
$pas=$_GET["passwort"];
$alt=$_GET["alter"];
if($log=="nata" && $pas=="12345"){
if($alt<18)
echo "<a href=https://translate.google.com/?hl=ru&sl=de&tl=ru&op=translate>Blaaaaa</a>";
else if($alt>=18 && $alt< 50)
echo "<a href=https://www.youtube.com/>YouTube</a>";
else if($alt>=50)
echo "<a href=https://chatgpt.com/>GPT</a>";
}
else {echo "Falsche Login oder Passwort";}
echo "<br/>Ihre IP-Adresse ist: "; 
echo $_SERVER['SERVER_ADDR'];
}
?>