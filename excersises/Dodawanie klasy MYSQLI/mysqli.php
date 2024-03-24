<?php
    $address = "localhost:3307";
    $user = "root";
    $pass = "";
    $db_name = "szkola1";

    $db = new mysqli($address, $user, $pass, $db_name);

    if(mysqli_connect_errno())
        echo "bing bong, your code is wrong";

    $id = $_POST["id"];
    $class = $_POST["class"];
    $query = "INSERT INTO klasa values('$id', '$class')";

    if($db->query($query))
        echo "Dodano";
    else
        echo "bing bong";


    $query = "SELECT nazwa FROM klasa";
    $select = $db->query($query);

    while($row = $select->fetch_assoc())
        echo "<br>Nazwa: ".$row["nazwa"];
?>