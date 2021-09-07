<!DOCTYPE html>

<?php

include("db.php");

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
$i=1;  // Anzahl der wuerfeln max=3 //
$a="";  // Anzahl der Runden max 26
$spieler = 1;
$oberehaelfte1="";
$gesamtoben1="";
$gesamtunten1="";
$gesamtergebnis1="";
$oberehaelfte2="";
$gesamtoben2="";
$gesamtunten2="";
$gesamtergebnis2="";
$ergebnis=0;
$ergebnis1=0;
$ergebnis2=0;
$ergebnis3=0;
$ergebnis4=0;
$ergebnis5=0;
$ergebnis6=0;
$ergebnis7=0;
$ergebnis8=0;
$ergebnis9=0;
$ergebnis10=0;
$ergebnis11=0;
$ergebnis12=0;
$ergebnis13=0;
// $ergebnis_einser=0;
// $ergebnis_zweier=0;
// $ergebnis_dreier=0;
// $ergebnis_vierer=0;
// $ergebnis_fuenfer=0;
// $ergebnis_sechser=0;
$auswahl=0;


$sql = "SELECT * FROM test ORDER BY id DESC LIMIT 1 OFFSET 1";
$result1=send_sql($sql);
$row1= mysqli_fetch_array($result1);
$spieler1=$row1['name'];

$sql = "SELECT * FROM test ORDER BY id DESC LIMIT 1";
$result2=send_sql($sql);
$row2= mysqli_fetch_array($result2);
$spieler2=$row2['name'];

$rundenzaehler=1;  // Anzahl der runden ist max 26 //

$auswertung= 0;   // wird ein eins gesetzt, wenn der spieler auswertet  //



if(isset($_POST['runde'])) {
    $i=$_POST['runde'];
    $i++;
    if($i==27) {
        header('Refresh: 1; URL= spielende.php');
    }

}
if(isset($_POST['ergebnis_abschicken'])) {
     
    if(isset($_POST['auswahl'])) {
        $auswahl=$_POST['auswahl'];
     }
     $w1=$_POST['wuerfel_1'];
     $w2=$_POST['wuerfel_2'];
     $w3=$_POST['wuerfel_3'];
     $w4=$_POST['wuerfel_4'];
     $w5=$_POST['wuerfel_5'];
if($spieler==1) {
    $spielername = $spieler1;
}
else {
    $spielername = $spieler2;
}
    switch ($auswahl) {
        case 'Einser':
            
            $ergebnis = einser($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Einser = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Zweier':
            $ergebnis = zweier($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Zweier = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Dreier':
            $ergebnis = dreier($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Dreier = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Vierer':
            $ergebnis = vierer($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Vierer = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Fuenfer':
            $ergebnis = fuenfer($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Fuenfer = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Sechser':
            $ergebnis = sechser($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Sechser = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Dreierpasch':
            $ergebnis = dreierpasch($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Dreierpasch = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Viererpasch':
            $ergebnis = viererpasch($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Viererpasch = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Full_House':
            $ergebnis = full_house($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Full_House = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Kleine_Strasse':
            $ergebnis = kleine_strasse($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Kleine_Strasse = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Grosse_Strasse':
            $ergebnis = grosse_strasse($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Grosse_Strasse = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Kniffel':
            $ergebnis = kniffel($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Kniffel = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        case 'Chance':
            $ergebnis = chance($w1,$w2,$w3,$w4,$w5);            
            $sql = "UPDATE test SET Chance = $ergebnis WHERE name = '$spielername'";
            mysqli_query($conn,$sql);
            break;
        default:
            
            break;
    }

    echo " $ergebnis $auswahl wird eingetragen <br />";
    
    $i=1;

     if(isset($_POST['a'])) {
        $a=$_POST['a'];
        if(IS_Numeric($a)) $a++;
        else $a=2;
    }

     if(isset($_POST['spieler'])){
         $spieler=$_POST['spieler'];
         if ($spieler==1){
             $spieler=2;
             echo "$spieler2 ist an der Reihe.";
         } else {
             $spieler=1;
             echo "$spieler1 ist an der Reihe.";

         }
     }
     

}   // auswertung

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




function einser($w1,$w2,$w3,$w4,$w5){
    if($w1==1){
        
    } else{
        $w1=0;}
        if($w2==1){
        
        } else{
            $w2=0;}
            if($w3==1){
        
            } else{
                $w3=0;}
                if($w4==1){
        
                } else{
                    $w4=0;}
                    if($w5==1){
        
                    } else{
                        $w5=0;}

    $ergebnis1= $w1+$w2+$w3+$w4+$w5;
    return $ergebnis1;
}

function zweier($w1,$w2,$w3,$w4,$w5){
    if($w1==2){
        
    } else{
        $w1=0;}
        if($w2==2){
        
        } else{
            $w2=0;}
            if($w3==2){
        
            } else{
                $w3=0;}
                if($w4==2){
        
                } else{
                    $w4=0;}
                    if($w5==2){
        
                    } else{
                        $w5=0;}

    $ergebnis2= $w1+$w2+$w3+$w4+$w5;

    return $ergebnis2;
}
function dreier($w1,$w2,$w3,$w4,$w5){
    if($w1==3){
        
    } else{
        $w1=0;}
        if($w2==3){
        
        } else{
            $w2=0;}
            if($w3==3){
        
            } else{
                $w3=0;}
                if($w4==3){
        
                } else{
                    $w4=0;}
                    if($w5==3){
        
                    } else{
                        $w5=0;}

    $ergebnis3= $w1+$w2+$w3+$w4+$w5;
    return $ergebnis3;
}
function vierer($w1,$w2,$w3,$w4,$w5){
    if($w1==4){
        
    } else{
        $w1=0;}
        if($w2==4){
        
        } else{
            $w2=0;}
            if($w3==4){
        
            } else{
                $w3=0;}
                if($w4==4){
        
                } else{
                    $w4=0;}
                    if($w5==4){
        
                    } else{
                        $w5=0;}

    $ergebnis4= $w1+$w2+$w3+$w4+$w5;
    return $ergebnis4;
}
function fuenfer ($w1,$w2,$w3,$w4,$w5){
    if($w1==5){
        
    } else{
        $w1=0;}
        if($w2==5){
        
        } else{
            $w2=0;}
            if($w3==5){
        
            } else{
                $w3=0;}
                if($w4==5){
        
                } else{
                    $w4=0;}
                    if($w5==5){
        
                    } else{
                        $w5=0;}

    $ergebnis5= $w1+$w2+$w3+$w4+$w5;
    return $ergebnis5;
}
function sechser($w1,$w2,$w3,$w4,$w5){
    if($w1==6){
        
    } else{
        $w1=0;}
        if($w2==6){
        
        } else{
            $w2=0;}
            if($w3==6){
        
            } else{
                $w3=0;}
                if($w4==6){
        
                } else{
                    $w4=0;}
                    if($w5==6){
        
                    } else{
                        $w5=0;}

    $ergebnis6= $w1+$w2+$w3+$w4+$w5;
    return $ergebnis6;
}
$oberehaelfte=$ergebnis1+$ergebnis2+$ergebnis3+$ergebnis4+$ergebnis5+$ergebnis6;
if($oberehaelfte>=63) {
    $gesamtoben=$oberehaelfte+35;
}
function dreierpasch($w1,$w2,$w3,$w4,$w5) {
    if($w1==$w2 && $w2==$w3) {
        $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
    }
        elseif($w1==$w2&&$w2==$w4) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w1==$w2&&$w2==$w5) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w1==$w4&&$w4==$w5) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w3==$w2&&$w2==$w4) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w5==$w2&&$w2==$w4) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w3==$w5&&$w5==$w4) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w3==$w5&&$w5==$w2) {
            $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
        }
        else {
            $ergebnis7 = 0;
        }
        return ergebnis7;

}
function viererpasch($w1,$w2,$w3,$w4,$w5) {
    if($w1==$w2&&$w2==$w3&&$w3==$w4) {
        $ergebnis8 = $w1+$w2+$w3+$w4+$w5;
    }
    elseif($w3==$w5&&$w5==$w2&&$w2==$w4) {
        $ergebnis8 = $w1+$w2+$w3+$w4+$w5;
    }
    elseif($w1==$w2&&$w2==$w3&&$w3==$w5) {
        $ergebnis8 = $w1+$w2+$w3+$w4+$w5;
    }
    elseif($w1==$w3&&$w3==$w5&&$w5==$w4) {
        $ergebnis7 = $w1+$w2+$w3+$w4+$w5;
    }
    elseif($w1==$w2&&$w2==$w4&&$w5==$w4) {
        $ergebnis8 = $w1+$w2+$w3+$w4+$w5;
    }
    else {
        $ergebnis8 = 0;
    }
    return ergebnis8;
}
function full_house($w1,$w2,$w3,$w4,$w5) {
    if($w1==$w2&&$w2==$w3 && $w4==$w5) {
        $ergebnis9 = 25;
    }
        elseif($w1==$w2&&$w2==$w4 && $w3==$w5) {
            $ergebnis9 = 25;
        }
        elseif($w1==$w2&&$w2==$w5 && $w3==$w4) {
            $ergebnis9 = 25;
        }
        elseif($w1==$w4&&$w4==$w5 && $w2==$w3) {
            $ergebnis9 = $w1+$w2+$w3+$w4+$w5;
        }
        elseif($w3==$w2&&$w2==$w4 && $w1==$w5) {
            $ergebnis9 = 25;
        }
        elseif($w3==$w5&&$w5==$w4 && $w1==$w2) {
            $ergebnis9 = 25;
        }
        elseif($w3==$w5&&$w5==$w2 && $w1==$w4) {
            $ergebnis9 = 25;
        }
        elseif($w5==$w2&&$w2==$w4 && $w1==$w3) {
            $ergebnis9 = 25;
        }
        else {
            $ergebnis9 = 0;
        }
        return ergebnis9;
}
function kleine_strasse($w1,$w2,$w3,$w4,$w5) {
    $strasse_ = array($w1,$w2,$w3,$w4,$w5);
    $strasse = array_unique($strasse_);
    sort($strasse);
    if([0]==1&&[1]==2&&[2]==3&&[3]==4) {
        $ergebnis = 30;
    }
    elseif([0]==2&&[1]==3&&[2]==4&&[3]==5) {
        $ergebnis10 = 30;
    }
    elseif([0]==3&&[1]==4&&[2]==5&&[3]==6) {
        $ergebnis10 = 30;
    }
    else {
        $ergebnis10 = 0;
    }
    return ergebnis10;
}
function grosse_strasse($w1,$w2,$w3,$w4,$w5) {
    $strasse_ = array($w1,$w2,$w3,$w4,$w5);
    $strasse = array_unique($strasse_);
    sort($strasse);
    if([0]==1&&[1]==2&&[2]==3&&[3]==4&&[4]==5) {
        $ergebnis11 = 40;
    }
    elseif([0]==2&&[1]==3&&[2]==4&&[3]==5&&[4]==6) {
        $ergebnis11 = 40;
    }
    else {
        $ergebnis11 = 0;
    }
    return ergebnis11;
    }

function kniffel($w1,$w2,$w3,$w4,$w5) {
    if($w1==$w2&&$w2==$w3&&$w3==$w4&&$w4==$w5) {
    $ergebnis12 = 50;
    }
    else {
        $ergebnis12 = 0;
    }
    return ergebnis12;
}
function chance ($w1,$w2,$w3,$w4,$w5) {
    $ergebnis13 = $w1+$w2+$w3+$w4+$w5;
    return ergebnis13;
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
        
        
        
        <input type="hidden" name="runde" value="<?php echo $i; ?>" />
        <br/>
        <input type="hidden" name="a" value="<?php echo $a; ?>" /> <?php if(IS_Numeric($a)) echo "Runde: $a <br/>";
        else echo "Runde: 1 <br/>  ";?>

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
        
        <?php if($i=3) {
        ?>
        <select name="auswahl"> 
<?php  if($spieler==1) {
    $spielername = $spieler1;
}
else {
    $spielername = $spieler2;
}
?>
        <?php   $sql="SELECT * FROM test WHERE name = '$spielername'";
                $result=send_sql($sql); 
                $row = mysqli_fetch_array($result);
                if(IS_NULL($row['Einser'])) { ?>
            <option value="Einser">Einser</option>
            <?php }?>
            <?php if(IS_NULL($row['Zweier'])) {?>
            <option value="Zweier">Zweier</option>
            <?php }?>
            <?php if(IS_NULL($row['Dreier'])) {?>
            <option value="Dreier">Dreier</option>        
            <?php }?>
            <?php if(IS_NULL($row['Vierer'])) {?>
            <option value="Vierer">Vierer</option>
            <?php }?>
            <?php if(IS_NULL($row['Fuenfer'])) {?>
            <option value="Fuenfer">Fünfer</option>
            <?php }?>
            <?php if(IS_NULL($row['Sechser'])) {?>
            <option value="Sechser">Sechser</option>
            <?php }?>
            <?php if(IS_NULL($row['Dreierpasch'])) {?>
            <option value="Dreierpasch">Dreierpasch</option>
            <?php }?>
            <?php if(IS_NULL($row['Viererpasch'])) {?>
            <option value="Viererpasch">Viererpasch</option>
            <?php }?>
            <?php if(IS_NULL($row['Full_House'])) {?>
            <option value="Full_House">Full House</option>
            <?php }?>
            <?php if(IS_NULL($row['Kleine_Strasse'])) {?>
            <option value="Kleine_Strasse">Kleine Straße</option>
            <?php }?>
            <?php if(IS_NULL($row['Grosse_Strasse'])) {?>
            <option value="Grosse_Strasse">Große Straße</option>
            <?php }?>
            <?php if(IS_NULL($row['Kniffel'])) {?>
            <option value="Kniffel">Kniffel</option>
            <?php }?>
            <?php if(IS_NULL($row['Chance'])) {?>
            <option value="Chance">Chance</option>
            <?php }?>

        </select>
        <input type="submit" name="ergebnis_abschicken" value="Ergebnis eintragen!" />
        <?php
        }
        ?>
        <br/>
        </form>

            
    <form action="" method="get"><table border="1">

<tr><td>Kategorie</td>      <td>mögliches Würfelergebnis </td>                  <td><?php echo $spieler1; ?></td><td><?php echo $spieler2; ?></td></tr>
<tr><td>Einser</td>         <td><?php echo einser($w1,$w2,$w3,$w4,$w5)?></td>   <td></td><td></td></tr>
<tr><td>Zweier</td>         <td><?php echo zweier($w1,$w2,$w3,$w4,$w5)?></td>   </tr>
<tr><td>Dreier</td>         <td><?php echo dreier($w1,$w2,$w3,$w4,$w5)?></td>   </tr>
<tr><td>Vierer</td>         <td><?php echo vierer($w1,$w2,$w3,$w4,$w5)?></td></tr>
<tr><td>Fuenfer</td>        <td><?php echo fuenfer($w1,$w2,$w3,$w4,$w5)?></td></tr>
<tr><td>Sechser</td>        <td><?php echo sechser($w1,$w2,$w3,$w4,$w5)?></td></tr>
<tr><td>&nbsp;</td>         <td></td></tr>
<tr><td>Bonus</td>          <td>  0</td></tr>
<tr><td>&nbsp;</td>         <td></td></tr>
<tr><td>3er-Pasch</td>      <td>&nbsp;</td></tr>
<tr><td>4er-Pasch</td>      <td>&nbsp;</td></tr>
<tr><td>FullHouse</td>      <td>&nbsp;</td></tr>
<tr><td>Kleine Strasse</td> <td>&nbsp;</td></tr>
<tr><td>Grosse Strasse</td> <td>&nbsp;</td></tr>
<tr><td>Kniffel</td>        <td>&nbsp;</td></tr>
<tr><td>Chance</td>         <td>&nbsp;</td></tr>
<tr><td>&nbsp;</td>         <td></td></tr>
<tr><td>Summe</td>          <td>  0</td></tr>
</table>
        

    </form>

    Spiel

</body>
</html>