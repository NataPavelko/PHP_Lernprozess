<pre>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nordwind";

$arr=file("Daten/namen.txt");
$con = mysqli_connect($host, $user, $pass, $db);
$sql = "Delete from personal";

mysqli_query($con, $sql);
$k=0;
foreach($arr as $i => $value) {

    $sql = "INSERT INTO personal(Persid,name) "
           ."VALUES ($i+1,\"$value\")";
    mysqli_query($con, $sql);
}

$sql = "Select * from personal;";
$result = mysqli_query($con, $sql);
while($zeile=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    foreach ($zeile as $key => $value){
        echo "$value ";
    }
    echo "<hr>";
}
?>
</pre>