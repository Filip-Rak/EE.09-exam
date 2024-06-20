<?php
    define("path", "txts/");

    @mkdir(path);

    $name = $_POST["fname"];
    $file = fopen(path.$name.".txt", "a");

    $str = $_POST["text"];
    fwrite($file, $str);

    echo "Zapisano";
?>