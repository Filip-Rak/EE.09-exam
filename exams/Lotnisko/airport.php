<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <section id="baner1">
        <h2>Odloty z lotniska</h2>
    </section>
    <section id="baner2">
        <img src="zad6.png" alt="logotyp">
    </section>
    <section id="glowny">
        <h4>Tabela odlotów</h4>
        <table>
            <tr>
                <th>lp</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
        <?php
            $db = new mysqli("127.0.0.1", "root", "", "egzamin");

            $select = $db->query("SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC");

            while($row = $select->fetch_array())
            {

                echo "<tr>";

                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";

                echo "</tr>";
            }

            $db->close();
        ?>

    </table>
    </section>
    <section id="stopka1">
        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
    </section>
    <section id="stopka2">

    <?php

        if(!isset($_COOKIE['visit']))
        {
            setcookie("visit", "chungus", time() + 3600);
            echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
        }
        else 
            echo "<p><b>Miło nam, że znowu nas odwiedziłeś</b></p>";
        
    ?>

    </section>
    <section id="stopka3">
        Autor: 192745937293844
    </section>
</body>