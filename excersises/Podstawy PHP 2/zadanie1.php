<?php
    echo "Data faktury: " . $_POST['fak_dat'] . "<br>";
    echo "Numer faktury: " . $_POST['fak_nr'] . "<br>";

    if(isset($_POST['druk']))
        echo "Wydrukować: tak";
    else 
        echo "Wydrukować: nie";

    echo "<br>Zleceniodawca: " . $_POST['commission'];
?>