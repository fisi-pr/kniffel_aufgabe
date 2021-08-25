<?php

include("db.php");

$spieler1="";
IF (isset($_POST["save"])) {
    echo "Eingabe gespeichert <br /> <br />";
    IF (isset($_POST["spieler1"])) {
        $spieler1 = $_POST["spieler1"];
        echo "Hallo $spieler1, schön dich zu sehen! <br />";
        $sql = "INSERT INTO test (name) VALUES($spieler1)";
        header('Refresh: 5; URL= spieler2.php');
    }
}
else {
    echo "Bitte erneut versuchen <br /> <br />";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spieler 1: Namen eingeben!</title>
</head>
<body>
        Spieler 1, bitte geben Sie Ihren Namen ein! <br />
    <form action="spieler1.php" method="POST">
        Spieler 1: <input type="text" name="spieler1" value="<?php echo "$spieler1"; ?>" />
         <input type="submit" name="save" value="Save" />
</form>
</body>
</html>