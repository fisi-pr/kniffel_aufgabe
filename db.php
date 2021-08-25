<!DOCTYPE html>

<?php

//db configuration
include("daten.php");

//globale standardfunktionen
include("functions.php");

$sql = "SELECT name, id, siege, spiele FROM test";
$result=send_sql($sql);

// $anzahl = mysqli_num_rows($result);
// echo $anzahl . "<br />";

// $sql = "INSERT INTO test (id,name,spiele,siege) VALUES(NULL, 'Moussa',12,6)";

// $sql = "UPDATE test SET spiele = 12 WHERE id = 1"; //Alle SQL-Befehle können ausgeführt werden

// $sql = "SELECT name, id, siege, spiele FROM test";
// $result=send_sql($sql);

// while($row = mysqli_fetch_array($result)) {

// //$row[0] = $row['id'], $row[1] = $row['name'], $row[3] = $row['spiele'], $row[3] = $row['siege']
// // immer attributname(zB $row['id']) nehmen
// // echo $row['name'] . " - " . $row['spiele'] . " - " . $row['siege'] . "<br />";
// }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>