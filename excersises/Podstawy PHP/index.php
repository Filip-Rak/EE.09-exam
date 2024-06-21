<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        //Napisz skrypt, który sprawdzi czy liczba jest wieksza od zera i podzielna przez 3

        $num = 3;   //<-- Wprowadzona liczba

        if($num > 0)
            echo "Liczba jest większa niż zero i ";
        else
            echo "Liczba nie jest większa niż zero i ";


        if($num%3==0)
            echo "jest podzielna przez 3";
        else
            echo "nie jest podzielna przez 3";


        echo "<br><br><br>";
        //Napisz skrypt, który tworzy tablice pięcioelementową z nazwiskami i wyswietl elementy tej tablicy
 
        $tab  = ["Bibi", "Bob", "Bacia", "Boitek", "Brufał"];

        for($i=0; $i<count($tab); $i++)
            echo $tab[$i]."<br>";
    ?>
</body>
