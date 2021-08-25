<?php

include("db.php");

$spieler1="";
IF (isset($_POST["save"])) {
    echo "Eingabe gespeichert <br /> <br />";
    IF (isset($_POST["spieler2"])) {
        $spieler1 = $_POST["spieler2"];
        echo "Hallo $spieler2, schön dich zu sehen! <br />";
        $sql = "INSERT INTO test (name) VALUES($spieler2)";
        header('Refresh: 5; URL= kniffel_aufgabe_alpha.php');
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
    <title>Spieler 2: Namen eingeben!</title>
</head>
<body>
        Spieler 2, bitte geben Sie Ihren Namen ein! <br />
    <form action="spieler2.php" method="POST">
        Spieler 2: <input type="text" name="spieler2" value="<?php echo "$spieler2"; ?>" />
         <input type="submit" name="save" value="Save" />
</form>
</body>
</html>