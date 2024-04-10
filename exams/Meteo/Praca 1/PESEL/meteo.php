<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section id="baner-lewy">
        <p>maj, 2019 r</p>
    </section>
    <section id="baner-srodkowy">
        <h2>Prognoza dla Poznania</h2>
    </section>
    <section id="baner-prawy">
        <img src="logo.png" alt="prognoza">
    </section>
    <section id="lewy">
        <a href="kwerendy.txt">Kwerendy</a>
    </section>
    <section id="prawy">
        <img src="obraz.jpg" alt="Polska, Poznań">
    </section>
    <section id="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY[mm/h]</th>
                <th>CIŚNIENIE[hPa]</th>
            </tr>
            <?php
                $db = new mysqli("127.0.0.1", "root", "", "prognoza");

                $select = $db->query("SELECT * FROM pogoda WHERE miasta_id = 2 ORDER BY data_prognozy DESC");


                $lp = 1;
                while($row = $select->fetch_array())
                {
                    echo "<tr>";
                    echo "<td>$lp</td>";

                    for($i=2; $i<=6; $i++)
                        echo "<td>$row[$i]</td>";
                
                    echo "</tr>";
                    $lp++;
                }

                $db->close();
            ?>

        </table>
    </section>
    <section id="stopka">
        <p>Stronę wykonał: 27489263849272</p>
    </section>
</body>