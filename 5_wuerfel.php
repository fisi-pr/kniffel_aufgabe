<?php

$zufallzahl1= "";
$zufallzahl2= "";
$zufallzahl3= "";
$zufallzahl4= "";
$zufallzahl5= "";
$i= 1;


IF (isset($_POST['wuerfeln'])) {
    while ($i <= 5) {
        $i=rand(1,6);
        $i=$zufallzahl1;
        $i++;
    }

    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Würfel</title>
</head>
<body>
    <form action="5_wuerfel.php" method="POST">
        Würfeln!<br> <input type="submit" name="wuerfelknopf" value="wuerfeln"><br>
        1. Ergebnis             <input type ="checkbox" name="cb1" value="<?php echo $zufallzahl1; ?>" checked="unchecked" />

</body>
</html>
