<!DOCTYPE html>
<head>
    <title>Przychodnia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section id="logo">
            <img id="loggo" src="strzykawka.png">
        </section>
            <section id="napis"><h1>Ogólnopolski Próbny Egzamin Zawodowy E14</h1></section>
        <section id="haslo">
            <img src="przychodnia.png">
        </section>
    </header>
    <section id="navi">
        <button type="button"><a href="kwerendy.txt">Kwerendy</a></button>
        <button type="button" href="przychodnia.sql"><a href="przychodnia.sql">Baza danych</a></button>
    </section>
    <section id="main">
        <b>Lekarze przyjmujący w przychdni</b> <br><br>
        <?php
            $db = new mysqli('127.0.0.1', 'root', '', 'przychodnia');

            $select = $db->query("SELECT imie, nazwisko FROM lekarze");

            while($row = $select->fetch_array())
            {
                echo "Nazwisko i imie: " . $row['nazwisko'] . ' ' . $row['imie'] . '<br>';
            }

            $db->close();
        ?>
    </section>
    <footer>
        <h3>Autor strony: 2345675676</h3>
    </footer>
</body>