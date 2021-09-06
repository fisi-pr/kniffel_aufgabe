

<?php

include("kniffel_aufgabe_alpha.php");
if($gesamtergebnis1>$gesamtergebnis2) {
echo "Herzlichen Glückwunsch " . $Spieler1 . "Ihr Ergebnis beträgt: " . $gesamtergebnis1 . <br /> . $Spieler2 . " hat " . $gesamtergebnis2 . " Punkte erzielt.";
}
else {
    echo "Herzlichen Glückwunsch " . $Spieler2 . "Ihr Ergebnis beträgt: " . $gesamtergebnis2 . <br /> . $Spieler1 . " hat " . $gesamtergebnis1 . " Punkte erzielt.";
} 

?>