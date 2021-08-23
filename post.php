<!DOCTYPE html>

<?php

$zahl1 = 0;
$zahl2 = 0;
$versteckt = 1;

If (isset($_POST['zahl1'])) {
    $zahl1 = $_POST['zahl1'];
    echo "Der Wert von zahl1 = $zahl1 <br />";
}

If (isset($_POST['zahl2'])) {
    $zahl2 = $_POST['zahl2'];
    echo "Der Wert von zahl2 = $zahl2 <br />";
}

If (isset($_POST['add'])) {
    $ergebnis = $zahl1 + $zahl2;
    echo "Die Summe von $zahl1 + $zahl2 = $ergebnis<br />";    
}

If (isset($_POST['sub'])) {
    $ergebnis = $zahl1 - $zahl2;
    echo "Die Summe von $zahl1 - $zahl2 = $ergebnis<br />";    
}

If (isset($_POST['mult'])) {
    $ergebnis = $zahl1 * $zahl2;
    echo "Die Summe von $zahl1 * $zahl2 = $ergebnis<br />";    
}

If (isset($_POST['div'])) {
    $ergebnis = $zahl1 / $zahl2;
    echo "Die Summe von $zahl1 / $zahl2 = $ergebnis<br />";    
}

If (isset($_POST['versteckt'])) {
    $versteckt = $_POST['versteckt'];
    $versteckt = $versteckt * 2;
    echo "Ich bin der Wert $versteckt, der sich immer verdoppelt. <br />";    
}

If (isset($_POST['cb1'])) {
    echo "ich wurde gedrückt!";    
}

?>

<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="post.php" method="POST">
            Bitte Zahl 1 eingeben: <input type="text" name="zahl1" value="<?php echo $zahl1; ?>" />
            <br />
            Bitte Zahl 2 eingeben: <input type="text" name="zahl2" value="<?php echo $zahl2; ?>"  />
            <br />
            <br />
            <input type ="hidden" name="versteckt" value="<?php echo $versteckt; ?>" />
            <br />
            <input type ="checkbox" name="cb1" checked="checked" />
            <br />
            <input type="submit" name="add" value="+" />
            <input type="submit" name="sub" value="-" />
            <input type="submit" name="mult" value="*" />
            <input type="submit" name="div" value="/" />
        </form>
    </body>
</html>