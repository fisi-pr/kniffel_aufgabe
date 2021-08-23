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

if(isset($_POST['runde'])) {
    $i=$_POST['runde'];
    $i++;
    echo "$i <br />";
}



$w1 = rand(1,6);
$w2 = rand(1,6);
$w3 = rand(1,6);
$w4 = rand(1,6);
$w5 = rand(1,6);
$spieler = 1;
$rundenzaehler=1;
$auswertung=1;
$r="";

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
        
        Spieler: <input type="text" name="spieler" value="<?php echo $spieler; ?>" />
        
        Rundenzaeler: <input type="text" name="rundenzaehler" value="<?php echo $rundenzaehler; ?>" />
        
        Auswertung: <input type="text" name="auswertung" value="<?php echo $auswertung; ?>" />
        <input type="hidden" name="runde" value="<?php echo $i; ?>" />
        <br/>

        Wuerfel 1: <?php echo $w1;?> <input type="hidden" name="wuerfel_1" value="<?php echo $w1;?>" /><input type="checkbox" name="b1" <?php echo $c1;?> /><br />
        Wuerfel 2: <?php echo $w2;?> <input type="hidden" name="wuerfel_2" value="<?php echo $w2;?>" /><input type="checkbox" name="b2" <?php echo $c2;?> /><br />
        Wuerfel 3: <?php echo $w3;?> <input type="hidden" name="wuerfel_3" value="<?php echo $w3;?>" /><input type="checkbox" name="b3" <?php echo $c3;?> /><br />
        Wuerfel 4: <?php echo $w4;?> <input type="hidden" name="wuerfel_4" value="<?php echo $w4;?>" /><input type="checkbox" name="b4" <?php echo $c4;?> /><br />
        Wuerfel 5: <?php echo $w5;?> <input type="hidden" name="wuerfel_5" value="<?php echo $w5;?>" /><input type="checkbox" name="b5" <?php echo $c5;?> /><br />
        
        <?php if($i<3) {
        ?>
        
        <input type="submit" name="wuerfeln" value="Wuerfeln!" />

        <?php } 
        ?>
        <br/>
        <?php ?>
        <?php if($r<26){
            ?>
            <input type="submit" name="auswertung" value="auswertung" />
         <?php   
        } else {
            $ergebnis="";
        }
        ?>

    </form>

</body>
</html>