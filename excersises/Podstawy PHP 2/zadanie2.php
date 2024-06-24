<?php
    switch($_POST['figure'])
    {
        case 'kwadrat':
            echo  $_POST['x'] * $_POST['x'];
            break;
        case 'prostokat': 
            echo $_POST['x'] * $_POST['y'];
            break;

        case 'kolo':
            echo pi() * ($_POST['x'] * $_POST['x']); 
    }
?>