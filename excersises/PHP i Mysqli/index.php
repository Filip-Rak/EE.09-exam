<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST">
        Imię: <input type="text" name="namae"> <br>
        Nazwisko: <input type="text" name="surname"> <br>
        Wiek: <input type="number" name="age"> <br><br>
        <input type="submit"> <br><br><br>
    </form>

    <?php
        //Napisz skrypt, który pobierze od użytkownika imię, nazwisko i wiek a nastepnie wyświetli te dane w trzech odzdzielnych linijkach
        echo "Imię: ".@$_POST['namae']."<br>";
        echo "Nazwisko: ".@$_POST['surname']."<br>";
        echo "Wiek: ".@$_POST['age']."<br>";
    ?>

    <br><br><br>

    <form method="POST">
        Podaj promień podstawy walca: <input type="number" name="r" value="0"> <br>
        Podaj wysokość walca: <input type="number" name="h" value="0"> <br><br>
        <input type="submit"> <br><br><br>
    </form>

    <?php
        //Napisz skrypt, który obliczy pole całkowite walca  
        $r = @$_POST['r'];
        $h = @$_POST['h'];

        $result = 2 * pi() * ($r * ($r+$h));

        echo "Pole całkowitej powierzchni walca to: ".$result;
    ?>

</body>
