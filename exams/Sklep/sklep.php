<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <section id="banerL">
        <h1>Internetowy sklep z eco-warzywami</h1>
    </section>
    <section id="banerR">
        <ol>
            <li>Warzywa</li>
            <li>Owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">Soki</a></li>
        </ol>
    </section>
    <section id="main">
        <?php
            $db = new mysqli("127.0.0.1", "root", "", "dane2");

            $select = $db->query("SELECT nazwa, opis, ilosc, cena, zdjecie FROM produkty WHERE rodzaje_id = 1 OR rodzaje_id = 2");

            while($row = $select->fetch_array())
            {
                $ob = $row['zdjecie'];
                $nz = $row['nazwa'];
                $op = $row['opis'];
                $il = $row['ilosc'];
                $c = $row['cena'];

                echo "<section class = info >";
                echo "<img src=$ob alt=warzywniak>";
                echo "<h5>$nz</h5>";
                echo "<p>$op</p>";
                echo "<p>Na stanie: $il</p>";
                echo "<h2> Cena: $c zł</h2>";
                echo "</section>";
            }
        ?>
    </section>
    <footer>
        <form method="POST">
            Nazwa: <input type="text" name="nz">
            Cena: <input type="number" name="pc">
            <input type="submit" value="Dodaj produkt"> <br>
            Stronę wykonał: 12843524566
        </form>
        <?php
            if(!empty($_POST['nz']))
            {
                $nz = $_POST['nz'];
                $pc = $_POST['pc'];

                $db->query("INSERT INTO produkty(Rodzaje_id, Producenci_id, nazwa, ilosc, opis, cena, zdjecie) VALUES(1, 1, '$nz', 10, '', $pc, 'owoce.jpg');");
            }
            
            $db->close();
        ?>
    </footer>
</body>