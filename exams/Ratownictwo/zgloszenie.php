<?php
    $db = new mysqli("127.0.0.1:3307", "root", "", "ratownictwo");

    if(mysqli_connect_errno())
        echo "fail";

    $rat = $_POST['ratownicy_nr'];
    $dysp = $_POST['dyspozytor_nr'];
    $adrs = $_POST['adres'];

    $time = date("H:i:s");

    $values = "VALUES('$rat', '$dysp', '$adrs', 0, '$time')";

    if($db->query("INSERT INTO zgloszenia(ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) " . $values))
        echo "success";
    else
        echo "succ";

    mysqli_close($db);
?>