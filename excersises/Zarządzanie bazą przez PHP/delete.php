<?php
    include("db.php");

    $id = $_GET["id"];
    $db->query("DELETE FROM wychowawca WHERE id = '$id'");
?>