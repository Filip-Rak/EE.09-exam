<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="banerL">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </section>
    <section id="banerR">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </section>
    <section id="list1">
        <h3>Polecamy</h3>
        <?php
            $db = new mysqli("127.0.0.1", "root", "", "dane3");

            $select = $db->query("SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id = 18 OR id = 22 OR id = 23 OR id = 25;");

            while($row = $select->fetch_array())
            {
                echo "<section class=film>";
                echo "<h4>". $row['id'] . ". " .  $row['nazwa'] . "</h4>";
                echo "<img src=" . $row['zdjecie'] . " alt=film>";
                echo "<p>" . $row['opis'] . "</p>";
                echo "</section>";
            }
        ?>
    </section>
    <section id="list2">
        <h3>Filmy fantastyczne</h3>
        <?php
            $select = $db->query("SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;");

            while($row = $select->fetch_array())
            {
                echo "<section class=film>";
                echo "<h4>". $row['id'] . ". " .  $row['nazwa'] . "</h4>";
                echo "<img src=" . $row['zdjecie'] . " alt=film>";
                echo "<p>" . $row['opis'] . "</p>";
                echo "</section>";
            }
        ?>
    </section>
    <footer>
        <form method="POST">
            Usuń film nr.:<input type="number" name="id">
            <input type="submit" value="Usuń film">
        </form>
        <?php
            if(isset($_POST['id']))
                $db->query("DELETE FROM produkty WHERE id = " . $_POST['id']);
            
        ?>
        Stronę wykonał: <a href="mailto:ja@poczta.com">0182428458172</a>
    </footer>
    <?php
        $db->close();
    ?>
<body>