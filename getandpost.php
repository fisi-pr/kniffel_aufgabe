<!DOCTYPE html>

<?php

//Übung: Geben Sie bitte zwei Zahlen ein
/**
 * Zahl1[button]
 * Zahl2[button]
 * [+] [-] [*] [/]
 */

//php wird nicht auf den client geladen


$vorname="";
$save="";
$n = 0;

if(isset($_GET["n"])) {
    $n = $_GET["n"];
    echo "Sie haben die Zahl $n weitergeleitet";
    $n++;

}


    IF (isset($_POST["save"])) {
        echo "Eingabe gespeichert <br /> <br />";
        IF (isset($_POST["vorname"])) {
            $vorname = $_POST["vorname"];
            echo "Hallo $vorname, schön dich zu sehen! <br />";
        }
    }
    else {
        echo "Hallo Welt! <br /> <br />";
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_and_post</title>
</head>
<body>
    Hallo Welt <br />

    <form action="getandpost.php" method="POST">
         Vorname: <input type="text" name="vorname" value="<?php echo "$vorname"; ?>" />
        <input type="submit" name="save" value="Save" />

    </form>
    <a href="getandpost.php?<?php echo "n=$n"?>">Hier wird hochgezählt</a> <!-- .php? sagt get voraus -->
</body>
</html>