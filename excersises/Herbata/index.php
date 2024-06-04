<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <table>
        <tr>
            <th>Nr herbaty</th>
            <th>Rodzaj</th>
            <th>Cena za 1 dag</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Zielona</td>
            <td>5 zł</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Biała</td>
            <td>7 zł</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Czarna</td>
            <td>10 zł</td>
        </tr>
    </table>

    <form method = "POST">
        nr herbaty <input type="number" name="nra" value="1"> <br>    
        ilosc w dag <input type="number" name="amn" value="2"> <br>    

        <button type="button" onclick="herb(parseInt(this.parentNode.nra.value), parseInt(this.parentNode.amn.value), out)">Kup</button>
        <input type="submit">
    </form>

    <?php
        $price = 0;

        switch(intVal($_POST['nra']))
        {
            case 1: $price = 5; break;
            case 2: $price = 7; break;
            case 3: $price = 10; break;
        }

        echo "PHP: " . (intVal($price) * intVal($_POST['amn']));
    ?>

    Cena: <span id="out"></span>
    
    <script src="script.js"></script>
</body>