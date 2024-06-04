<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <?php
        $db = new mysqli('127.0.0.1', 'root', '', 'dane4');
    ?>
    <section id="baner">
        <h3>Portal społecznościowy - Panel administratora</h3>
    </section>
    <section id="lewy">
        <h4>Użytkownicy</h4>
        <?php
            $select = $db->query('SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30');

            while($row = $select->fetch_array())
            {
                echo $row['id'] . '. ' . $row['imie'] . ' ' . $row['nazwisko'] . ', ' . (date('Y') - $row['rok_urodzenia']) . '<br>';
            }
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section id="prawy">
        <h4>Podaj id użytkownika</h4>
        <form method="POST">
            <input type="number" name="id">
            <input type="submit" value="ZOBACZ">
        </form>
        <hr>
        <?php
            $id = $_POST['id'];
            $select = $db->query("SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa FROM osoby INNER JOIN hobby ON osoby.Hobby_id = hobby.id WHERE osoby.id = '$id'");

            $row = $select->fetch_array();
            echo '<h2>' . $id . '. ' . $row['imie'] . ' ' . $row['nazwisko'] . "</h2><img src = " . $row['zdjecie'] . " alt = '$id'>";

            $ru = $row['rok_urodzenia'];
            $op = $row['opis'];
            $na = $row['nazwa'];

            echo "<p>Rok urodzenia: $ru</p>";
            echo "<p>Opis: $op</p>";
            echo "<p>Nazwa: $na</p>";
        ?>
    </section>
    <footer>
        Stronę wykonał: 26539241287
    </footer>
    <?php
        $db->close();
    ?>
</body>