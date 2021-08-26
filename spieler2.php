<?php

include("db.php");

$spieler2="";
$eingabe= 1;
IF (isset($_POST["save"])) {
    
    IF (isset($_POST["spieler2"])) {
        $spieler2 = $_POST["spieler2"];
        $sql = "INSERT INTO test (name) VALUES('$spieler2')";
        if($result=mysqli_query($conn,$sql)) {
         echo "Eingabe gespeichert <br /> <br />";
         echo "Hallo $spieler2, schön dich zu sehen! <br />";
         $eingabe=0;
        header('Refresh: 5; URL= kniffel_aufgabe_alpha.php');
        } else {
                echo "Anfrage aendern!" . $sql . "<br />" . mysqli_error($conn);
         }
    }
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
    <?php
        if($eingabe==1){
    ?>        
        Spieler 2, bitte geben Sie Ihren Namen ein! <br />
    <form action="spieler2.php" method="POST">
        Spieler 2: <input type="text" name="spieler2" value="<?php echo "$spieler2"; ?>" />
         <input type="submit" name="save" value="Save" />
</form>
<?php
        }
?>
</body>
</html>