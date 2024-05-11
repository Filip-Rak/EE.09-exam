<?php
    $db = new mysqli("127.0.0.1", "root", "", "wedkarstwo");

    if(mysqli_connect_errno())
        echo "succ";

    $low = $_POST['low'];
    $dat = $_POST['data'];
    $sed = $_POST['sed'];

    $vals = "VALUES(0, '$low', '$dat', '$sed')";

    if($db->query("INSERT INTO zawody_wedkarskie(karty_wedkarskie_id, lowisko_id, data_zawodow, sedzia) " . $vals))
        echo "success";
    else
        echo "succ";

    mysqli_close($db);
?>