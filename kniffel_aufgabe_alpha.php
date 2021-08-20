<!DOCTYPE html>

<?php

$w1='';
$w2='';
$w3='';
$w4='';
$w5='';
$c1="";
$c2="";
$c3="";
$c4="";
$c5="";
$i=1;
$s1='';
$s2='';
$r=1;

if($r<=26){
    


if(isset($_POST['runde'])) {
    $i=$_POST['runde'];
    $i++;
    echo "Würfelrunde $i <br />";
}
if(isset($_POST['spielrunde'])) {
    $r=$_POST['spielrunde'];
    if($i==4){
    $r++;
    echo "Spielrunde $r <br />";
}
}
if ($r % 2 != 0) {
    echo "Spieler 1 ist dran !";
} else {echo "Spieler 2 ist dran !";} 

$w1 = rand(1,6);
$w2 = rand(1,6);
$w3 = rand(1,6);
$w4 = rand(1,6);
$w5 = rand(1,6);

if (isset($_POST['wuerfeln'])) {
    if (isset($_POST['b1'])) {
        $w1=$_POST['wuerfel_1'];
        $c1="checked=\"checked\"";
    } else {
        $w1=rand(1,6);
    }
    if (isset($_POST['b2'])) {
        $w2=$_POST['wuerfel_2'];
        $c2="checked=\"checked\"";
    } else {
        $w2=rand(1,6);
    }
    if (isset($_POST['b3'])) {
        $w3=$_POST['wuerfel_3'];
        $c3="checked=\"checked\"";
    } else {
        $w3=rand(1,6);
    }
    if (isset($_POST['b4'])) {
        $w4=$_POST['wuerfel_4'];
        $c4="checked=\"checked\"";
    } else {
        $w4=rand(1,6);
    }
    if (isset($_POST['b5'])) {
        $w5=$_POST['wuerfel_5'];
        $c5="checked=\"checked\"";
    } else {
        $w5=rand(1,6);
    }
}
} else{
    echo "Spielergebnis anzeigen";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form action="kniffel_aufgabe_alpha.php" method="POST" >
        
        <input type="hidden" name="runde" value="<?php echo $i; ?>" />
        Runde <?php echo $r; ?> <input type="hidden" name="spielrunde" value="<?php echo $r;?>" /><br />
        Wuerfel 1: <?php echo $w1;?> <input type="hidden" name="wuerfel_1" value="<?php echo $w1;?>" /><input type="checkbox" name="b1" <?php echo $c1;?> /><br />
        Wuerfel 2: <?php echo $w2;?> <input type="hidden" name="wuerfel_2" value="<?php echo $w2;?>" /><input type="checkbox" name="b2" <?php echo $c2;?> /><br />
        Wuerfel 3: <?php echo $w3;?> <input type="hidden" name="wuerfel_3" value="<?php echo $w3;?>" /><input type="checkbox" name="b3" <?php echo $c3;?> /><br />
        Wuerfel 4: <?php echo $w4;?> <input type="hidden" name="wuerfel_4" value="<?php echo $w4;?>" /><input type="checkbox" name="b4" <?php echo $c4;?> /><br />
        Wuerfel 5: <?php echo $w5;?> <input type="hidden" name="wuerfel_5" value="<?php echo $w5;?>" /><input type="checkbox" name="b5" <?php echo $c5;?> /><br />
        
        <?php if($i<3) {
        ?>
        
        <input type="submit" name="wuerfeln" value="Wuerfeln!" />
        <?php if($i==4) {
        ?>
        <input type="submit" name="ergebnis" value="<?php echo "Ergebnis eintragen!"; ?> />
        <?php } 
        ?>
        <?php } 
        ?>
    </form>

</body>
</html>