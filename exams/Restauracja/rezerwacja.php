<?php
    $db = new mysqli('127.0.0.1', 'root', '', 'baza3');

    $date = $_POST['data'];
    $ppl = $_POST['osoby'];
    $phone = $_POST['tel'];
    $perm = $_POST['permission'];

    if($db->query("INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES('$date', '$ppl', '$phone')"))
        echo "Dodano rezerwacje do bazy";

    $db->close();
?>