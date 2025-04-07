
<?php
  session_start();
  if(!isset($_SESSION["id"])) {
    header("Location: /php/projekt/index.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="teststyle.css" />
    <title>login</title>
<style>
  .flex{
    overflow: scroll;
    max-height: 650px;
  
td, th {
  padding: 7px;
  border-collapse: collapse;
border-top: 2px solid #F1F1F2;
  text-align: left;
}
tr{
  border-bottom: 1px solid black;
}
th{
  text-transform: uppercase;
  color: rgb(46, 42, 45);
}
td{
    color:rgb(46, 42, 45);
}
table.center {
  margin-left: auto;
  margin-right: auto;
  border-spacing: 1px;
}
tr:nth-child(even) {
background-color: #adebad;
}
</style>

  </head>
  <body>
    <!--
    <div class="top">
    <div class="header">
      <hr><hr>
      <h1><- - - -  S.A.F.E  - - - -></h1>
      <hr><hr>
      </div> -->
       <ul class="menu">
     <li class="wahl"><a href="home.php"><h4 class="pos">HOME</h4></a></li>
   <li class="wahl"><a href="transaktion.php"><h4 class="pos">Transaktionen</h4></a></li>
   <li class="wahl"><a href="analis.php" class="active"><h4 class="pos">Analyse</h4></a></li>
   <li class="wahl"><a href="profil.php"><h4 class="pos">Mein Profil</h4></a></li>
   <li class="wahl" style="float:right"><a href="aus.php"><h4 class="pos">Ausloggen</h4></a></li>
 </ul>
         <div class="container">
         <h1 class="title">Budget-Analyse</h1>

        <form id="analisForm" action="analis.php" method="POST" class="transaction">
            <label for="von" class="form-label">Von</label>
             <input type="date" name="von" class="form-input">

            <label for="bis" class="form-label">Bis</label>
             <input type="date" name="bis" class="form-input">
                       
            <label for="typeAn" class="form-label">Art:</label>
        <select id="type" name="typeAn" required class="form-input">
                <option value="einnahme">Einnahme</option>
                <option value="ausgabe">Ausgabe</option>
        </select>
        

            <label for="kategorie" class="form-label">Kategorie:</label>
           <select id="kategorie" name="kategorie" required class="form-input">
           </select>

            <button type="submit" class="form-button">Speichern</button>
        </form>

</div>
         <script src="script.js"></script>
        <div class="container">
        <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "neu";

$con = mysqli_connect($host, $user, $pass, $db);
$result=[];
if(isset($_POST["von"])){
        $von=$_POST["von"];
        $bis=$_POST["bis"];
        $typeAn=$_POST["typeAn"];
        $userId = $_SESSION["id"];
        $kategorie=$_POST["kategorie"];
        //$user_id="SELECT id from users where users.id=transactions.user_id";
        $sql="SELECT amount, description, Datum, categories.Type, categories.name from transactions, categories
        where transactions.category_id=categories.id
        and  Datum > '".$von."' and Datum < '".$bis."' and categories.id = ".$kategorie." and categories.Type='".$typeAn."' and user_id = ".$userId;
        $result = $con->query($sql);  

    }
?>

 <!--$sql="SELECT amount, description, Datum, categories.Type, categories.name from transactions, categories
 where transactions.category_id=categories.id
 and  Datum > '".$von."' and Datum < '".$bis."' and categories.Type='".$typeAn."' and user_id = ".$userId; -->

<!-- and categories.name = '".$kategorieAn."' -->
  <?php 
  //session_start();
  //if(isset($_SESSION["amount"])) { ?>
  <br>
<div class="flex">
    <table class="center" style="width:100%" >
 <?php 
    if(!isset($_POST["von"]))
{?>
<div class="vonbis">
<h2>Wählen Sie den Zeitraum Ihrer Transaktionen aus</h2>
</div>
<?php } 
?>

 <?php 
    if(isset($_POST["von"]))
{?>

<div class="vonbis">
    <h2>Ergebnisse von <?php echo $von ?> bis <?php echo $bis ?></h2>
</div>  

    <tr>
    <th>Datum</th>
    <th>Betrag</th>
    <th>Art</th>
    <th>Kategorie</th>
    <th>Beschreibung</th>
  </tr>
  <?php
}?>
   <?PHP
   if(isset($_POST["von"]))
{
while ($row = mysqli_fetch_array($result)) {
    ?>    
    <tr>
    <td><?=$row['Datum']?></td>
    <td><?=$row['amount']?></td>
    <td><?=$row['Type']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['description']?></td>
    </tr>
    <?PHP
}
}

?> 
</table>

    </div>
</div>

</div>
    </div>

    <br /><br />

        <dl class="horizontal">
        <dt>Avatar</dt>
        <dd><span style="width:100%;">$ 2.740 Mio.</span></dd>
        <dt>Titanic</dt>
        <dd><span style="width:80%;">$ 1.843 Mio.</span></dd>
        <dt>Lord of the Rings</dt>
        <dd><span style="width:43%;">$ 1.119 Mio.</span></dd>
        <dt>Pirates of the Caribbean</dt>
        <dd><span style="width:40%;">$ 1.066 Mio.</span></dd>
        <dt>Alice in Wonderland</dt>
        <dd><span style="width:38%;">$ 1.021 Mio.</span></dd>
        <dt>The Dark Knight</dt>
        <dd><span style="width:35%;">$ 1.00 Mio.</span></dd>
        </dl>

  </body>
</html>


<!--
                 <option value="1">Gehalt</option>
                <option value="2">Geschenke</option>
                <option value="3">Investitionen</option>
                <option value="4">Miete</option>
                <option value="5">Lebensmittel</option>
                <option value="6">Unterhaltung</option>
                <option value="0">Reisen</option>
                <option value="7">Lieferdienste</option>
                <option value="8">Restaurants</option>
                <option value="9">Kleidung</option>
                <option value="10">Transport</option> -->