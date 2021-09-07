

<?php
include("db.php");

$sql = "DELETE from test";
mysqli_query($conn,$sql);
header('Refresh: 8; URL= spieler1.php'); 
echo "<div style ='font:30px/30px Comic Sans MS,tahoma,sans-serif;'> Willkommen zu unserem 2-Spieler Kniffelspiel!";

?>