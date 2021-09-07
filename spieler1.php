<?php

include("db.php");

$spieler1="";
$eingabe= 1;
IF (isset($_POST["save"])) {
    
    IF (isset($_POST["spieler1"])) {
        $spieler1 = $_POST["spieler1"];
        $sql = "INSERT INTO test (name) VALUES('$spieler1')";
        if($result=mysqli_query($conn,$sql)) {
         echo "Eingabe gespeichert <br /> <br />";
         echo "Hallo $spieler1, schön dich zu sehen! <br />";
         $eingabe=0;
        header('Refresh: 2; URL= spieler2.php');
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
    <title>Spieler 1: Namen eingeben!</title>
</head>
<body>
    <?php
        if($eingabe==1){
    ?>        
        Spieler 1, bitte geben Sie Ihren Namen ein! <br />
    <form action="spieler1.php" method="POST">
        Spieler 1: <input type="text" name="spieler1" value="<?php echo "$spieler1"; ?>" />
         <input type="submit" name="save" value="Save" />
</form>
<?php
        }
?>
</body>
</html>