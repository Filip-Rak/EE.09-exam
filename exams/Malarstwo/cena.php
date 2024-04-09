<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styl.css">
    <title>Malarz</title>
</head>
<body>
    <header>
        <a href="index.html">
            <h1>Koszty farby</h1>
        </a>
    </header>
    <section id="ml">
        <h3>Mieszamy czy wymieniamy?</h3>
        <a href="mieszamy.html">Mieszamy</a> <br>
        <a href="cena.php">Wyceniamy</a> 
    </section>
    <section id="mr">
        <h3>Obliczanie na podstawie powierzchni zapotrzebowania na farbę</h3> 

        <form method="POST">
            Podaj powierzchnie: <input type="number" id="sqInp" name="sqInp" min=0> <br><br>
            <button type="button" onclick="Calc(sqInp.value, output)">Policz JS</button>
            <input type="submit" value="Policz PHP">
        </form>

        <span id="output">
            <?php
                if(empty($_POST["sqInp"]))
                    $square = 0;
                else
                    $square = $_POST["sqInp"];


                $result = ceil($square / 4);
                echo "[PHP] Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " . $result;
            ?>
        </span>
    </section>
    <footer>
        MALARZ <br>
        Stronę opracował: PESEL
    </footer>
    <script src="script.js"></script>
</body>