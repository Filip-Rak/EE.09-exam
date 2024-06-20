<?php

    if(empty($_POST["choice"]))
    {
        echo "Nie wybrano pliku";
        return 0;
    }


    if(!empty(glob($_POST["choice"])))
    {
        $choice = $_POST["choice"];
        
        $file = fopen($choice, "r");
        $str = fread($file, filesize($choice)+1);
    
        echo $str;
    }  
    else
        echo "Plik nie istnieje";
?>