<?php
    include("db.php");

    $select = $db->query("SELECT imie, nazwisko, id FROM wychowawca");

    
    $output = "";

    while($row = $select->fetch_assoc())
        $output .= "Imie: ".$row["imie"]."<br>Nazwisko: ".$row["nazwisko"]."<br>ID: ".$row["id"]."<br><br>";

    echo $output;
?>