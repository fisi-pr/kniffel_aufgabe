<?php

function send_sql($sql) {
    global $conn;
    if($result=mysqli_query($conn,$sql)) {
        return $result;
    }
    else {
        echo "Anfrage aendern!" . $sql . "<br />" . mysqli_error($conn);
    }
}

?>