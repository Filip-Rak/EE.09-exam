<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </section>
    <section id="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $db = new mysqli("127.0.0.1", "root", "", "dane");

            $select = $db->query("SELECT DISTINCT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6");

            while($row = $select->fetch_array())
            {
                echo "<section class = zdjecie >";
                echo "<img src = $row[3] alt = przyjaciel >";
                echo "</section>";

                echo "<section class = opis >";
                echo "<h3>$row[0] $row[1]</h3>";
                echo "<p>Ostatni wpis: $row[2]</p>";
                echo "</section>";


                echo "<section class = linia >";
                echo "<hr>";
                echo "</section>";
            }

            $db->close();
        ?>
    </section>
    <section id="stopka1">
        Stronę wykonał: 826437092567
    </section>
    <section id="stopka2">
        <a href="mailto:ja@portal.pl">Napisz do mnie</a>
    </section>
</body>