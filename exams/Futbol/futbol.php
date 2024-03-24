<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        $db = new mysqli("127.0.0.1", "root", "", "loki");

        if(mysqli_connect_errno())
            echo "fail";
    ?>
    <section id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </section>
    <section id="mecze">
        <?php
            $result = $db->query("SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 LIKE 'EVG';");

            while($row = $result->fetch_array())
            {
                $a = $row['zespol1'];
                $b = $row['zespol2'];
                $c = $row['wynik'];
                $d = $row['data_rozgrywki'];

                echo "<section id=info>";
                echo "<h3>$a - $b</h3> <h4>$c</h4><p>w dniu: $d</p>";
                echo "</section>";
            }
        ?>
    </section>
    <section id="main">
        <h2>Reprezentacja Polski</h2>
    </section>
    <section id="left">
        <p>
            Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy,4-napastnicy):
        </p>
        <form method="POST">
            <input type="number" name="pos">
            <input type="submit" value="Sprawdź">
            <ul>
            <?php
                if(!empty($_POST['pos']))
                {
                    $a = $_POST['pos'];

                    $rs = $db->query("SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = '$a';");

                    while($row = $rs->fetch_array())
                    {
                        $a = $row['imie'];
                        $b = $row['nazwisko'];

                        echo "<li><p>$a $b</p></li>";
                    }
                }
            ?>
            </ul>
        </form>
    </section>
    <section id="right">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 1732937234921</p>
    </section>
    <?php
        mysqli_close($db);
    ?>
</body>