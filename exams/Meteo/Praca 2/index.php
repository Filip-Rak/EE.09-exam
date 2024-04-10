<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST">
        Cena paliwa: <input type="number" name="pr" value="13" id="base"> <br>
        <input type="radio" name="procent" value="0.8" checked="true"> obniżono o 20% <br>
        <input type="radio" name="procent" value="1.23"> podniesiono o VAT(23%) <br>
        <input type="checkbox" name="acc" id="acc"> Akceptuję cenę <br>
        <input type="submit" value="Oblicz koszt"> <button type="button" onclick="calc(parseInt(base.value), this.parentNode.procent, acc.checked, out)">Oblicz JS</button>
    </form>
    <br>
    <?php
        $final = $_POST['pr'] * floatVal($_POST['procent']);

        if(isset($_POST['acc']))
            echo "PHP: Cena wynosi: " . $final . "zł";
        else 
            echo "PHP: za darmo";
    ?>
    JS: <span id="out">czeka</span>
    <script src="script.js"></script>
</body>